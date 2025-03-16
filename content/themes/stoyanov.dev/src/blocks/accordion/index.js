import { registerBlockType } from "@wordpress/blocks";
import {
	InnerBlocks,
	PlainText
} from "@wordpress/block-editor";

import metadata from './block.json';
import style from './style.scss';

const {
	name,
	attributes,
	title,
	icon,
	supports
} = metadata;

registerBlockType(
	name,
	{
		title,
		icon,
		attributes,
		supports,
		edit: (props) => {
			const {
				attributes: {summary},
				setAttributes
			} = props;

			return (
				<div className="ps-accordion-admin">
					<PlainText
						tagName="h4"
						placeholder="Hidden text"
						value={summary}
						onChange={content => {
							setAttributes({summary: content});
						}}
					/>
					<div className="ps-accordion__container">
						<InnerBlocks/>
					</div>
				</div>
			)
		},
		save: (props) => {
			const {summary} = props.attributes;
			return (
				<details className="ps-accordion">
					<summary className="ps-accordion__summary">{summary}</summary>
					<div className="ps-accordion__content">
						<InnerBlocks.Content/>
					</div>
				</details>
			);
		}
	},
)
