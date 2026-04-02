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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGlobalAccelerator请求参数结构体
 *
 * @method string getName() 获取<p>名称，最大长度不能超过60个字节。</p>
 * @method void setName(string $Name) 设置<p>名称，最大长度不能超过60个字节。</p>
 * @method string getInstanceChargeType() 获取<p>计费模式，PREPAID：表示预付费，即包年包月，POSTPAID：表示后付费，即按量计费。默认：POSTPAID。当前仅支持后付费。</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>计费模式，PREPAID：表示预付费，即包年包月，POSTPAID：表示后付费，即按量计费。默认：POSTPAID。当前仅支持后付费。</p>
 * @method string getDescription() 获取<p>描述信息，最大长度不能超过100个字节。</p>
 * @method void setDescription(string $Description) 设置<p>描述信息，最大长度不能超过100个字节。</p>
 * @method string getCrossBorderType() 获取<p>跨境类型；HighQuality：精品BGP-IP跨境；Unicom：联通专线跨境。</p>
 * @method void setCrossBorderType(string $CrossBorderType) 设置<p>跨境类型；HighQuality：精品BGP-IP跨境；Unicom：联通专线跨境。</p>
 * @method boolean getCrossBorderPromiseFlag() 获取<p>此Flag代表签署跨境服务承诺书。当使用跨境服务时候，此字段必传。True：代表签署。</p>
 * @method void setCrossBorderPromiseFlag(boolean $CrossBorderPromiseFlag) 设置<p>此Flag代表签署跨境服务承诺书。当使用跨境服务时候，此字段必传。True：代表签署。</p>
 * @method array getTags() 获取<p>标签信息</p>
 * @method void setTags(array $Tags) 设置<p>标签信息</p>
 */
class CreateGlobalAcceleratorRequest extends AbstractModel
{
    /**
     * @var string <p>名称，最大长度不能超过60个字节。</p>
     */
    public $Name;

    /**
     * @var string <p>计费模式，PREPAID：表示预付费，即包年包月，POSTPAID：表示后付费，即按量计费。默认：POSTPAID。当前仅支持后付费。</p>
     */
    public $InstanceChargeType;

    /**
     * @var string <p>描述信息，最大长度不能超过100个字节。</p>
     */
    public $Description;

    /**
     * @var string <p>跨境类型；HighQuality：精品BGP-IP跨境；Unicom：联通专线跨境。</p>
     */
    public $CrossBorderType;

    /**
     * @var boolean <p>此Flag代表签署跨境服务承诺书。当使用跨境服务时候，此字段必传。True：代表签署。</p>
     */
    public $CrossBorderPromiseFlag;

    /**
     * @var array <p>标签信息</p>
     */
    public $Tags;

    /**
     * @param string $Name <p>名称，最大长度不能超过60个字节。</p>
     * @param string $InstanceChargeType <p>计费模式，PREPAID：表示预付费，即包年包月，POSTPAID：表示后付费，即按量计费。默认：POSTPAID。当前仅支持后付费。</p>
     * @param string $Description <p>描述信息，最大长度不能超过100个字节。</p>
     * @param string $CrossBorderType <p>跨境类型；HighQuality：精品BGP-IP跨境；Unicom：联通专线跨境。</p>
     * @param boolean $CrossBorderPromiseFlag <p>此Flag代表签署跨境服务承诺书。当使用跨境服务时候，此字段必传。True：代表签署。</p>
     * @param array $Tags <p>标签信息</p>
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

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CrossBorderType",$param) and $param["CrossBorderType"] !== null) {
            $this->CrossBorderType = $param["CrossBorderType"];
        }

        if (array_key_exists("CrossBorderPromiseFlag",$param) and $param["CrossBorderPromiseFlag"] !== null) {
            $this->CrossBorderPromiseFlag = $param["CrossBorderPromiseFlag"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
