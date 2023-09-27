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
 * @method string getType() 获取站点接入类型。该参数取值如下，不填写时默认为 partial：
<li>partial：CNAME 接入；</li>
<li> full：NS 接入；</li>
<li>noDomainAccess：无域名接入。</li>
 * @method void setType(string $Type) 设置站点接入类型。该参数取值如下，不填写时默认为 partial：
<li>partial：CNAME 接入；</li>
<li> full：NS 接入；</li>
<li>noDomainAccess：无域名接入。</li>
 * @method string getZoneName() 获取站点名称。CNAME/NS 接入的时，请传入二级域名（example.com）作为站点名称；无域名接入时，该值请保留为空。
 * @method void setZoneName(string $ZoneName) 设置站点名称。CNAME/NS 接入的时，请传入二级域名（example.com）作为站点名称；无域名接入时，该值请保留为空。
 * @method string getArea() 获取Type 取值为 partial/full 时，七层域名的加速区域。以下为该参数取值，不填写时该值默认为 overseas。Type 取值为 noDomainAccess 时该值请保留为空：
<li> global: 全球可用区；</li>
<li> mainland: 中国大陆可用区；</li>
<li> overseas: 全球可用区（不含中国大陆）。</li>
 * @method void setArea(string $Area) 设置Type 取值为 partial/full 时，七层域名的加速区域。以下为该参数取值，不填写时该值默认为 overseas。Type 取值为 noDomainAccess 时该值请保留为空：
<li> global: 全球可用区；</li>
<li> mainland: 中国大陆可用区；</li>
<li> overseas: 全球可用区（不含中国大陆）。</li>
 * @method string getPlanId() 获取待绑定的目标套餐 ID。当您账号下已存在套餐时，可以填写此参数，直接将站点绑定至该套餐。若您当前没有可绑定的套餐时，请前往控制台购买套餐完成站点创建。
 * @method void setPlanId(string $PlanId) 设置待绑定的目标套餐 ID。当您账号下已存在套餐时，可以填写此参数，直接将站点绑定至该套餐。若您当前没有可绑定的套餐时，请前往控制台购买套餐完成站点创建。
 * @method string getAliasZoneName() 获取同名站点标识。限制输入数字、英文、- 和 _ 组合，长度 20 个字符以内。详情参考 [同名站点标识](https://cloud.tencent.com/document/product/1552/70202)，无此使用场景时，该字段保留为空即可。
 * @method void setAliasZoneName(string $AliasZoneName) 设置同名站点标识。限制输入数字、英文、- 和 _ 组合，长度 20 个字符以内。详情参考 [同名站点标识](https://cloud.tencent.com/document/product/1552/70202)，无此使用场景时，该字段保留为空即可。
 * @method array getTags() 获取标签。该参数用于对站点进行分权限管控、分账。需要先前往 [标签控制台](https://console.cloud.tencent.com/tag/taglist) 创建对应的标签才可以在此处传入对应的标签键和标签值。
 * @method void setTags(array $Tags) 设置标签。该参数用于对站点进行分权限管控、分账。需要先前往 [标签控制台](https://console.cloud.tencent.com/tag/taglist) 创建对应的标签才可以在此处传入对应的标签键和标签值。
 * @method boolean getAllowDuplicates() 获取是否允许重复接入。
<li> true：允许重复接入；</li>
<li> false：不允许重复接入。</li>不填写使用默认值false。
 * @method void setAllowDuplicates(boolean $AllowDuplicates) 设置是否允许重复接入。
<li> true：允许重复接入；</li>
<li> false：不允许重复接入。</li>不填写使用默认值false。
 * @method boolean getJumpStart() 获取是否跳过站点现有的DNS记录扫描。默认值：false。
 * @method void setJumpStart(boolean $JumpStart) 设置是否跳过站点现有的DNS记录扫描。默认值：false。
 */
class CreateZoneRequest extends AbstractModel
{
    /**
     * @var string 站点接入类型。该参数取值如下，不填写时默认为 partial：
<li>partial：CNAME 接入；</li>
<li> full：NS 接入；</li>
<li>noDomainAccess：无域名接入。</li>
     */
    public $Type;

    /**
     * @var string 站点名称。CNAME/NS 接入的时，请传入二级域名（example.com）作为站点名称；无域名接入时，该值请保留为空。
     */
    public $ZoneName;

    /**
     * @var string Type 取值为 partial/full 时，七层域名的加速区域。以下为该参数取值，不填写时该值默认为 overseas。Type 取值为 noDomainAccess 时该值请保留为空：
<li> global: 全球可用区；</li>
<li> mainland: 中国大陆可用区；</li>
<li> overseas: 全球可用区（不含中国大陆）。</li>
     */
    public $Area;

    /**
     * @var string 待绑定的目标套餐 ID。当您账号下已存在套餐时，可以填写此参数，直接将站点绑定至该套餐。若您当前没有可绑定的套餐时，请前往控制台购买套餐完成站点创建。
     */
    public $PlanId;

    /**
     * @var string 同名站点标识。限制输入数字、英文、- 和 _ 组合，长度 20 个字符以内。详情参考 [同名站点标识](https://cloud.tencent.com/document/product/1552/70202)，无此使用场景时，该字段保留为空即可。
     */
    public $AliasZoneName;

    /**
     * @var array 标签。该参数用于对站点进行分权限管控、分账。需要先前往 [标签控制台](https://console.cloud.tencent.com/tag/taglist) 创建对应的标签才可以在此处传入对应的标签键和标签值。
     */
    public $Tags;

    /**
     * @var boolean 是否允许重复接入。
<li> true：允许重复接入；</li>
<li> false：不允许重复接入。</li>不填写使用默认值false。
     * @deprecated
     */
    public $AllowDuplicates;

    /**
     * @var boolean 是否跳过站点现有的DNS记录扫描。默认值：false。
     * @deprecated
     */
    public $JumpStart;

    /**
     * @param string $Type 站点接入类型。该参数取值如下，不填写时默认为 partial：
<li>partial：CNAME 接入；</li>
<li> full：NS 接入；</li>
<li>noDomainAccess：无域名接入。</li>
     * @param string $ZoneName 站点名称。CNAME/NS 接入的时，请传入二级域名（example.com）作为站点名称；无域名接入时，该值请保留为空。
     * @param string $Area Type 取值为 partial/full 时，七层域名的加速区域。以下为该参数取值，不填写时该值默认为 overseas。Type 取值为 noDomainAccess 时该值请保留为空：
<li> global: 全球可用区；</li>
<li> mainland: 中国大陆可用区；</li>
<li> overseas: 全球可用区（不含中国大陆）。</li>
     * @param string $PlanId 待绑定的目标套餐 ID。当您账号下已存在套餐时，可以填写此参数，直接将站点绑定至该套餐。若您当前没有可绑定的套餐时，请前往控制台购买套餐完成站点创建。
     * @param string $AliasZoneName 同名站点标识。限制输入数字、英文、- 和 _ 组合，长度 20 个字符以内。详情参考 [同名站点标识](https://cloud.tencent.com/document/product/1552/70202)，无此使用场景时，该字段保留为空即可。
     * @param array $Tags 标签。该参数用于对站点进行分权限管控、分账。需要先前往 [标签控制台](https://console.cloud.tencent.com/tag/taglist) 创建对应的标签才可以在此处传入对应的标签键和标签值。
     * @param boolean $AllowDuplicates 是否允许重复接入。
<li> true：允许重复接入；</li>
<li> false：不允许重复接入。</li>不填写使用默认值false。
     * @param boolean $JumpStart 是否跳过站点现有的DNS记录扫描。默认值：false。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("AliasZoneName",$param) and $param["AliasZoneName"] !== null) {
            $this->AliasZoneName = $param["AliasZoneName"];
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

        if (array_key_exists("JumpStart",$param) and $param["JumpStart"] !== null) {
            $this->JumpStart = $param["JumpStart"];
        }
    }
}
