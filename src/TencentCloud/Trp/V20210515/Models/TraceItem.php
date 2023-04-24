<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 溯源数据项 Type 的枚举值

text:文本类型, longtext:长文本类型, banner:单图片类型, image:多图片类型, video:视频类型, mp:小程序类型

具体组合如下
- Type: "text" 文本类型, 对应值 Value: "文本字符串"
- Type: "longtext" 长文本类型, 对应值 Value: "长文本字符串, 支持换行\n"
- Type: "banner" 单图片类型, 对应图片地址 Value: "https://sample.cdn.com/xxx.jpg"
- Type: "image" 多图片类型, 对应图片地址 Values: ["https://sample.cdn.com/1.jpg", "https://sample.cdn.com/2.jpg"]
- Type: "video" 视频类型, 对应视频地址 Value: "https://sample.cdn.com/xxx.mp4"
- Type: "mp" 小程序类型, 对应配置 Values: ["WXAPPID", "WXAPP_PATH", "跳转说明"]
 *
 * @method string getName() 获取字段名称
 * @method void setName(string $Name) 设置字段名称
 * @method string getValue() 获取字段值
 * @method void setValue(string $Value) 设置字段值
 * @method string getType() 获取字段类型
text:文本类型, 
longtext:长文本类型, banner:单图片类型, image:多图片类型,
video:视频类型,
mp:小程序类型
 * @method void setType(string $Type) 设置字段类型
text:文本类型, 
longtext:长文本类型, banner:单图片类型, image:多图片类型,
video:视频类型,
mp:小程序类型
 * @method boolean getReadOnly() 获取只读
 * @method void setReadOnly(boolean $ReadOnly) 设置只读
 * @method boolean getHidden() 获取扫码展示
 * @method void setHidden(boolean $Hidden) 设置扫码展示
 * @method array getValues() 获取多个值
 * @method void setValues(array $Values) 设置多个值
 * @method string getKey() 获取类型标识
 * @method void setKey(string $Key) 设置类型标识
 * @method string getExt() 获取扩展字段
 * @method void setExt(string $Ext) 设置扩展字段
 * @method array getAttrs() 获取额外属性
 * @method void setAttrs(array $Attrs) 设置额外属性
 * @method array getList() 获取子页面，只读
 * @method void setList(array $List) 设置子页面，只读
 */
class TraceItem extends AbstractModel
{
    /**
     * @var string 字段名称
     */
    public $Name;

    /**
     * @var string 字段值
     */
    public $Value;

    /**
     * @var string 字段类型
text:文本类型, 
longtext:长文本类型, banner:单图片类型, image:多图片类型,
video:视频类型,
mp:小程序类型
     */
    public $Type;

    /**
     * @var boolean 只读
     */
    public $ReadOnly;

    /**
     * @var boolean 扫码展示
     */
    public $Hidden;

    /**
     * @var array 多个值
     */
    public $Values;

    /**
     * @var string 类型标识
     */
    public $Key;

    /**
     * @var string 扩展字段
     */
    public $Ext;

    /**
     * @var array 额外属性
     */
    public $Attrs;

    /**
     * @var array 子页面，只读
     */
    public $List;

    /**
     * @param string $Name 字段名称
     * @param string $Value 字段值
     * @param string $Type 字段类型
text:文本类型, 
longtext:长文本类型, banner:单图片类型, image:多图片类型,
video:视频类型,
mp:小程序类型
     * @param boolean $ReadOnly 只读
     * @param boolean $Hidden 扫码展示
     * @param array $Values 多个值
     * @param string $Key 类型标识
     * @param string $Ext 扩展字段
     * @param array $Attrs 额外属性
     * @param array $List 子页面，只读
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("Hidden",$param) and $param["Hidden"] !== null) {
            $this->Hidden = $param["Hidden"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Ext",$param) and $param["Ext"] !== null) {
            $this->Ext = $param["Ext"];
        }

        if (array_key_exists("Attrs",$param) and $param["Attrs"] !== null) {
            $this->Attrs = [];
            foreach ($param["Attrs"] as $key => $value){
                $obj = new TraceItem();
                $obj->deserialize($value);
                array_push($this->Attrs, $obj);
            }
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new TraceData();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
