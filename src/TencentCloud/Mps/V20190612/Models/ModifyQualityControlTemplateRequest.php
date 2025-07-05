<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyQualityControlTemplate请求参数结构体
 *
 * @method integer getDefinition() 获取媒体质检模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置媒体质检模板唯一标识。
 * @method string getName() 获取媒体质检模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置媒体质检模板名称，长度限制：64 个字符。
 * @method string getComment() 获取模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置模板描述信息，长度限制：256 个字符。
 * @method array getQualityControlItemSet() 获取媒体质检配置参数。
 * @method void setQualityControlItemSet(array $QualityControlItemSet) 设置媒体质检配置参数。
 * @method string getRecordFormat() 获取录制文件格式。可选值：
<li>PNG: PNG图片</li>
 * @method void setRecordFormat(string $RecordFormat) 设置录制文件格式。可选值：
<li>PNG: PNG图片</li>
 */
class ModifyQualityControlTemplateRequest extends AbstractModel
{
    /**
     * @var integer 媒体质检模板唯一标识。
     */
    public $Definition;

    /**
     * @var string 媒体质检模板名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var array 媒体质检配置参数。
     */
    public $QualityControlItemSet;

    /**
     * @var string 录制文件格式。可选值：
<li>PNG: PNG图片</li>
     */
    public $RecordFormat;

    /**
     * @param integer $Definition 媒体质检模板唯一标识。
     * @param string $Name 媒体质检模板名称，长度限制：64 个字符。
     * @param string $Comment 模板描述信息，长度限制：256 个字符。
     * @param array $QualityControlItemSet 媒体质检配置参数。
     * @param string $RecordFormat 录制文件格式。可选值：
<li>PNG: PNG图片</li>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("QualityControlItemSet",$param) and $param["QualityControlItemSet"] !== null) {
            $this->QualityControlItemSet = [];
            foreach ($param["QualityControlItemSet"] as $key => $value){
                $obj = new QualityControlItemConfig();
                $obj->deserialize($value);
                array_push($this->QualityControlItemSet, $obj);
            }
        }

        if (array_key_exists("RecordFormat",$param) and $param["RecordFormat"] !== null) {
            $this->RecordFormat = $param["RecordFormat"];
        }
    }
}
