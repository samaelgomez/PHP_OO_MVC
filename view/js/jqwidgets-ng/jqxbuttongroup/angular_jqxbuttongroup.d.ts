/// <reference path="../jqwidgets.d.ts" />
import { EventEmitter, ElementRef, OnChanges, SimpleChanges } from '@angular/core';
export declare class jqxButtonGroupComponent implements OnChanges {
    attrDisabled: boolean;
    attrEnableHover: boolean;
    attrMode: string;
    attrRtl: boolean;
    attrTemplate: string;
    attrTheme: string;
    attrWidth: string | number;
    attrHeight: string | number;
    autoCreate: boolean;
    properties: string[];
    host: any;
    elementRef: ElementRef;
    widgetObject: jqwidgets.jqxButtonGroup;
    constructor(containerElement: ElementRef);
    ngOnInit(): void;
    ngOnChanges(changes: SimpleChanges): boolean;
    arraysEqual(attrValue: any, hostValue: any): boolean;
    manageAttributes(): any;
    moveClasses(parentEl: HTMLElement, childEl: HTMLElement): void;
    moveStyles(parentEl: HTMLElement, childEl: HTMLElement): void;
    createComponent(options?: any): void;
    createWidget(options?: any): void;
    __updateRect__(): void;
    setOptions(options: any): void;
    disabled(arg?: boolean): boolean;
    enableHover(arg?: boolean): boolean;
    mode(arg?: string): string;
    rtl(arg?: boolean): boolean;
    template(arg?: string): string;
    theme(arg?: string): string;
    disableAt(index: number): void;
    disable(): void;
    destroy(): void;
    enable(): void;
    enableAt(index: number): void;
    getSelection(): any;
    render(): void;
    setSelection(index: number): void;
    onButtonclick: EventEmitter<any>;
    onSelected: EventEmitter<any>;
    onUnselected: EventEmitter<any>;
    __wireEvents__(): void;
}