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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getDefinition() 获取指定时间点截图模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置指定时间点截图模板唯一标识。
 * @method string getName() 获取指定时间点截图模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置指定时间点截图模板名称，长度限制：64 个字符。
 * @method integer getWidth() 获取图片宽度，取值范围： [128, 4096]，单位：px。
 * @method void setWidth(integer $Width) 设置图片宽度，取值范围： [128, 4096]，单位：px。
 * @method integer getHeight() 获取图片高度，取值范围： [128, 4096]，单位：px。
 * @method void setHeight(integer $Height) 设置图片高度，取值范围： [128, 4096]，单位：px。
 * @method string getFormat() 获取图片格式，取值可以为 jpg 和 png。
 * @method void setFormat(string $Format) 设置图片格式，取值可以为 jpg 和 png。
 * @method string getComment() 获取模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置模板描述信息，长度限制：256 个字符。
 * @method integer getSubAppId() 获取点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 * @method void setSubAppId(integer $SubAppId) 设置点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 */

/**
 *ModifySnapshotByTimeOffsetTemplate请求参数结构体
 */
class ModifySnapshotByTimeOffsetTemplateRequest extends AbstractModel
{
    /**
     * @var integer 指定时间点截图模板唯一标识。
     */
    public $Definition;

    /**
     * @var string 指定时间点截图模板名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var integer 图片宽度，取值范围： [128, 4096]，单位：px。
     */
    public $Width;

    /**
     * @var integer 图片高度，取值范围： [128, 4096]，单位：px。
     */
    public $Height;

    /**
     * @var string 图片格式，取值可以为 jpg 和 png。
     */
    public $Format;

    /**
     * @var string 模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var integer 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
     */
    public $SubAppId;
    /**
     * @param integer $Definition 指定时间点截图模板唯一标识。
     * @param string $Name 指定时间点截图模板名称，长度限制：64 个字符。
     * @param integer $Width 图片宽度，取值范围： [128, 4096]，单位：px。
     * @param integer $Height 图片高度，取值范围： [128, 4096]，单位：px。
     * @param string $Format 图片格式，取值可以为 jpg 和 png。
     * @param string $Comment 模板描述信息，长度限制：256 个字符。
     * @param integer $SubAppId 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
