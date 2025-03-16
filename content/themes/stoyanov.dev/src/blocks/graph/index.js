import { registerBlockType } from "@wordpress/blocks";
import {PlainText} from "@wordpress/block-editor";
import { __experimentalNumberControl as NumberControl } from "@wordpress/components";

import metadata from './block.json';
import style from './style.scss';

const {
	name,
	attributes,
	title,
	icon,
	supports
} = metadata;

const determineStyle = (value) => {
	let contentColor, contentWidth;
	if (value < 3.5) {
		contentColor = "#db3d3d"
	} else if (value < 6) {
		contentColor = "#e8cf0e"
	} else {
		contentColor = "#00a846"
	}
	contentWidth = (value / 10) * 100 + '%';
	return {
		contentWidth: contentWidth,
		contentColor: contentColor
	};
}

registerBlockType(
	name,
	{
		title,
		icon,
		attributes,
		supports,
		edit: (props) => {
			const {
				attributes: {
					title,
					level
				},
				setAttributes
			} = props;
			const {
				contentWidth,
				contentColor
			} = determineStyle(level);

			return (
				<div className="ps-chart-admin">
					<div className="ps-chart-admin__inputs">
					</div>
					<div className="ps-chart">
						<h5 className="ps-chart__title">
							<PlainText
								tagName="h4"
								placeholder="Title"
								value={title}
								onChange={val => {
									setAttributes({title: val});
								}}
							/>
						</h5>
						<div className="ps-chart__container">
							<div className="ps-chart__visual">
								<div className="ps-chart__bar" style={{width: contentWidth, backgroundColor: contentColor}}></div>
							</div>
							<div className="ps-chart__number">
								<NumberControl
									value={level}
									step={0.5}
									shiftStep={1}
									min={0}
									max={10}
									onChange={val => {
										setAttributes({level: val});
									}}
								/>
							</div>
						</div>
					</div>
				</div>
			)
		},
		save: (props) => {
			const {
				title,
				level
			} = props.attributes;
			const {
				contentWidth,
				contentColor
			} = determineStyle(level);
			return (
				<div className="ps-chart">
					<h5 className="ps-chart__title">{title}</h5>
					<div className="ps-chart__container">
					<div className="ps-chart__visual">
							<div className="ps-chart__bar" style={{width: contentWidth, backgroundColor: contentColor}}></div>
						</div>
						<div className="ps-chart__number">{level}</div>
					</div>
				</div>
			);
		}
	},
)
