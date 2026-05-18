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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLicenseBindList请求参数结构体
 *
 * @method integer getLicenseId() 获取<p>授权ID取DescribeLicenseList接口List对象下的LicenseId参数值</p>
 * @method void setLicenseId(integer $LicenseId) 设置<p>授权ID取DescribeLicenseList接口List对象下的LicenseId参数值</p>
 * @method integer getLicenseType() 获取<p>授权类型</p><p>枚举值：</p><ul><li>0： 专业版-按量计费</li><li>1： 专业版-包年包月(主机安全)</li><li>2： 旗舰版-包年包月(主机安全)</li><li>3： 轻量版-LH-包年包月</li><li>6： 专业版-包年包月（云安全中心）</li><li>7： 旗舰版-包年包月（云安全中心）</li></ul>
 * @method void setLicenseType(integer $LicenseType) 设置<p>授权类型</p><p>枚举值：</p><ul><li>0： 专业版-按量计费</li><li>1： 专业版-包年包月(主机安全)</li><li>2： 旗舰版-包年包月(主机安全)</li><li>3： 轻量版-LH-包年包月</li><li>6： 专业版-包年包月（云安全中心）</li><li>7： 旗舰版-包年包月（云安全中心）</li></ul>
 * @method string getResourceId() 获取<p>资源ID,取DescribeLicenseList接口List对象下的ResourceId参数值</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID,取DescribeLicenseList接口List对象下的ResourceId参数值</p>
 * @method array getFilters() 获取<li>InstanceID、IP、<p>MachineName 模糊查询</li></p>
 * @method void setFilters(array $Filters) 设置<li>InstanceID、IP、<p>MachineName 模糊查询</li></p>
 * @method integer getLimit() 获取<p>限制条数,默认10.</p>
 * @method void setLimit(integer $Limit) 设置<p>限制条数,默认10.</p>
 * @method integer getOffset() 获取<p>偏移量,默认0.</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量,默认0.</p>
 */
class DescribeLicenseBindListRequest extends AbstractModel
{
    /**
     * @var integer <p>授权ID取DescribeLicenseList接口List对象下的LicenseId参数值</p>
     */
    public $LicenseId;

    /**
     * @var integer <p>授权类型</p><p>枚举值：</p><ul><li>0： 专业版-按量计费</li><li>1： 专业版-包年包月(主机安全)</li><li>2： 旗舰版-包年包月(主机安全)</li><li>3： 轻量版-LH-包年包月</li><li>6： 专业版-包年包月（云安全中心）</li><li>7： 旗舰版-包年包月（云安全中心）</li></ul>
     */
    public $LicenseType;

    /**
     * @var string <p>资源ID,取DescribeLicenseList接口List对象下的ResourceId参数值</p>
     */
    public $ResourceId;

    /**
     * @var array <li>InstanceID、IP、<p>MachineName 模糊查询</li></p>
     */
    public $Filters;

    /**
     * @var integer <p>限制条数,默认10.</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量,默认0.</p>
     */
    public $Offset;

    /**
     * @param integer $LicenseId <p>授权ID取DescribeLicenseList接口List对象下的LicenseId参数值</p>
     * @param integer $LicenseType <p>授权类型</p><p>枚举值：</p><ul><li>0： 专业版-按量计费</li><li>1： 专业版-包年包月(主机安全)</li><li>2： 旗舰版-包年包月(主机安全)</li><li>3： 轻量版-LH-包年包月</li><li>6： 专业版-包年包月（云安全中心）</li><li>7： 旗舰版-包年包月（云安全中心）</li></ul>
     * @param string $ResourceId <p>资源ID,取DescribeLicenseList接口List对象下的ResourceId参数值</p>
     * @param array $Filters <li>InstanceID、IP、<p>MachineName 模糊查询</li></p>
     * @param integer $Limit <p>限制条数,默认10.</p>
     * @param integer $Offset <p>偏移量,默认0.</p>
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
        if (array_key_exists("LicenseId",$param) and $param["LicenseId"] !== null) {
            $this->LicenseId = $param["LicenseId"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
