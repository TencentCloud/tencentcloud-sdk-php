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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateZone请求参数结构体
 *
 * @method string getZoneName() 获取站点名称。
 * @method void setZoneName(string $ZoneName) 设置站点名称。
 * @method string getType() 获取接入方式，取值有：
<li> full：NS接入；</li>
<li> partial：CNAME接入，请先调用认证站点API（IdentifyZone）进行站点归属权校验，校验通过后继续调用本接口创建站点。</li>不填写使用默认值full。
 * @method void setType(string $Type) 设置接入方式，取值有：
<li> full：NS接入；</li>
<li> partial：CNAME接入，请先调用认证站点API（IdentifyZone）进行站点归属权校验，校验通过后继续调用本接口创建站点。</li>不填写使用默认值full。
 * @method boolean getJumpStart() 获取是否跳过站点现有的DNS记录扫描。默认值：false。
 * @method void setJumpStart(boolean $JumpStart) 设置是否跳过站点现有的DNS记录扫描。默认值：false。
 * @method array getTags() 获取资源标签。
 * @method void setTags(array $Tags) 设置资源标签。
 * @method boolean getAllowDuplicates() 获取是否允许重复接入。
<li> true：允许重复接入；</li>
<li> false：不允许重复接入。</li>不填写使用默认值false。
 * @method void setAllowDuplicates(boolean $AllowDuplicates) 设置是否允许重复接入。
<li> true：允许重复接入；</li>
<li> false：不允许重复接入。</li>不填写使用默认值false。
 * @method string getAliasZoneName() 获取站点别名。数字、英文、-和_组合，限制20个字符。
 * @method void setAliasZoneName(string $AliasZoneName) 设置站点别名。数字、英文、-和_组合，限制20个字符。
 */
class CreateZoneRequest extends AbstractModel
{
    /**
     * @var string 站点名称。
     */
    public $ZoneName;

    /**
     * @var string 接入方式，取值有：
<li> full：NS接入；</li>
<li> partial：CNAME接入，请先调用认证站点API（IdentifyZone）进行站点归属权校验，校验通过后继续调用本接口创建站点。</li>不填写使用默认值full。
     */
    public $Type;

    /**
     * @var boolean 是否跳过站点现有的DNS记录扫描。默认值：false。
     */
    public $JumpStart;

    /**
     * @var array 资源标签。
     */
    public $Tags;

    /**
     * @var boolean 是否允许重复接入。
<li> true：允许重复接入；</li>
<li> false：不允许重复接入。</li>不填写使用默认值false。
     */
    public $AllowDuplicates;

    /**
     * @var string 站点别名。数字、英文、-和_组合，限制20个字符。
     */
    public $AliasZoneName;

    /**
     * @param string $ZoneName 站点名称。
     * @param string $Type 接入方式，取值有：
<li> full：NS接入；</li>
<li> partial：CNAME接入，请先调用认证站点API（IdentifyZone）进行站点归属权校验，校验通过后继续调用本接口创建站点。</li>不填写使用默认值full。
     * @param boolean $JumpStart 是否跳过站点现有的DNS记录扫描。默认值：false。
     * @param array $Tags 资源标签。
     * @param boolean $AllowDuplicates 是否允许重复接入。
<li> true：允许重复接入；</li>
<li> false：不允许重复接入。</li>不填写使用默认值false。
     * @param string $AliasZoneName 站点别名。数字、英文、-和_组合，限制20个字符。
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
        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("JumpStart",$param) and $param["JumpStart"] !== null) {
            $this->JumpStart = $param["JumpStart"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AllowDuplicates",$param) and $param["AllowDuplicates"] !== null) {
            $this->AllowDuplicates = $param["AllowDuplicates"];
        }

        if (array_key_exists("AliasZoneName",$param) and $param["AliasZoneName"] !== null) {
            $this->AliasZoneName = $param["AliasZoneName"];
        }
    }
}
