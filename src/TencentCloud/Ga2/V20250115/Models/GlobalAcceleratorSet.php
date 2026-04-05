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
 * 全球加速实例信息
 *
 * @method string getGlobalAcceleratorId() 获取<p>全球加速实例ID。</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置<p>全球加速实例ID。</p>
 * @method string getName() 获取<p>全球加速实例名称。</p>
 * @method void setName(string $Name) 设置<p>全球加速实例名称。</p>
 * @method string getDescription() 获取<p>全球加速实例描述。</p>
 * @method void setDescription(string $Description) 设置<p>全球加速实例描述。</p>
 * @method string getCreateTime() 获取<p>全球加速实例创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>全球加速实例创建时间。</p>
 * @method string getState() 获取<p>全球加速实例状态。</p>
 * @method void setState(string $State) 设置<p>全球加速实例状态。</p>
 * @method string getInstanceChargeType() 获取<p>全球加速实例付费类型。</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>全球加速实例付费类型。</p>
 * @method string getDdosId() 获取<p>全球加速实例DdosId。</p>
 * @method void setDdosId(string $DdosId) 设置<p>全球加速实例DdosId。</p>
 * @method integer getListenerCounts() 获取<p>所属加速实例监听器个数。</p>
 * @method void setListenerCounts(integer $ListenerCounts) 设置<p>所属加速实例监听器个数。</p>
 * @method integer getAcceleratorAreaCounts() 获取<p>所属加速实例加速地域个数。</p>
 * @method void setAcceleratorAreaCounts(integer $AcceleratorAreaCounts) 设置<p>所属加速实例加速地域个数。</p>
 * @method string getStatus() 获取<p>全球加速实例状态。</p>
 * @method void setStatus(string $Status) 设置<p>全球加速实例状态。</p>
 * @method string getCname() 获取<p>域名。</p>
 * @method void setCname(string $Cname) 设置<p>域名。</p>
 * @method string getCrossBorderType() 获取<p>跨境类型；HighQuality（精品跨境）、Unicom（联通跨境）、NotAvailable（未开通）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrossBorderType(string $CrossBorderType) 设置<p>跨境类型；HighQuality（精品跨境）、Unicom（联通跨境）、NotAvailable（未开通）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagSet() 获取<p>标签信息。</p>
 * @method void setTagSet(array $TagSet) 设置<p>标签信息。</p>
 */
class GlobalAcceleratorSet extends AbstractModel
{
    /**
     * @var string <p>全球加速实例ID。</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>全球加速实例名称。</p>
     */
    public $Name;

    /**
     * @var string <p>全球加速实例描述。</p>
     */
    public $Description;

    /**
     * @var string <p>全球加速实例创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>全球加速实例状态。</p>
     */
    public $State;

    /**
     * @var string <p>全球加速实例付费类型。</p>
     */
    public $InstanceChargeType;

    /**
     * @var string <p>全球加速实例DdosId。</p>
     */
    public $DdosId;

    /**
     * @var integer <p>所属加速实例监听器个数。</p>
     */
    public $ListenerCounts;

    /**
     * @var integer <p>所属加速实例加速地域个数。</p>
     */
    public $AcceleratorAreaCounts;

    /**
     * @var string <p>全球加速实例状态。</p>
     */
    public $Status;

    /**
     * @var string <p>域名。</p>
     */
    public $Cname;

    /**
     * @var string <p>跨境类型；HighQuality（精品跨境）、Unicom（联通跨境）、NotAvailable（未开通）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrossBorderType;

    /**
     * @var array <p>标签信息。</p>
     */
    public $TagSet;

    /**
     * @param string $GlobalAcceleratorId <p>全球加速实例ID。</p>
     * @param string $Name <p>全球加速实例名称。</p>
     * @param string $Description <p>全球加速实例描述。</p>
     * @param string $CreateTime <p>全球加速实例创建时间。</p>
     * @param string $State <p>全球加速实例状态。</p>
     * @param string $InstanceChargeType <p>全球加速实例付费类型。</p>
     * @param string $DdosId <p>全球加速实例DdosId。</p>
     * @param integer $ListenerCounts <p>所属加速实例监听器个数。</p>
     * @param integer $AcceleratorAreaCounts <p>所属加速实例加速地域个数。</p>
     * @param string $Status <p>全球加速实例状态。</p>
     * @param string $Cname <p>域名。</p>
     * @param string $CrossBorderType <p>跨境类型；HighQuality（精品跨境）、Unicom（联通跨境）、NotAvailable（未开通）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagSet <p>标签信息。</p>
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("DdosId",$param) and $param["DdosId"] !== null) {
            $this->DdosId = $param["DdosId"];
        }

        if (array_key_exists("ListenerCounts",$param) and $param["ListenerCounts"] !== null) {
            $this->ListenerCounts = $param["ListenerCounts"];
        }

        if (array_key_exists("AcceleratorAreaCounts",$param) and $param["AcceleratorAreaCounts"] !== null) {
            $this->AcceleratorAreaCounts = $param["AcceleratorAreaCounts"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("CrossBorderType",$param) and $param["CrossBorderType"] !== null) {
            $this->CrossBorderType = $param["CrossBorderType"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
