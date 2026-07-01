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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstancesDisasterRecoverGroup请求参数结构体
 *
 * @method array getInstanceIds() 获取<p>一个或多个待操作的实例ID。可通过<a href="https://cloud.tencent.com/document/api/213/15728"> DescribeInstances </a>接口返回值中的<code>InstanceId</code>获取。每次请求批量实例的上限为100</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>一个或多个待操作的实例ID。可通过<a href="https://cloud.tencent.com/document/api/213/15728"> DescribeInstances </a>接口返回值中的<code>InstanceId</code>获取。每次请求批量实例的上限为100</p>
 * @method string getDisasterRecoverGroupId() 获取<p>分散置放群组ID，可使用<a href="https://cloud.tencent.com/document/api/213/17810">DescribeDisasterRecoverGroups</a>接口获取</p>
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) 设置<p>分散置放群组ID，可使用<a href="https://cloud.tencent.com/document/api/213/17810">DescribeDisasterRecoverGroups</a>接口获取</p>
 * @method boolean getForce() 获取<p>是否强制更换实例宿主机。取值范围：<br><li>true：表示允许实例更换宿主机，允许重启实例。本地盘子机不支持指定此参数。</li><br><li>false：不允许实例更换宿主机，只在当前宿主机上加入置放群组。这可能导致更换置放群组失败。</li><br><br>默认取值：false</p>
 * @method void setForce(boolean $Force) 设置<p>是否强制更换实例宿主机。取值范围：<br><li>true：表示允许实例更换宿主机，允许重启实例。本地盘子机不支持指定此参数。</li><br><li>false：不允许实例更换宿主机，只在当前宿主机上加入置放群组。这可能导致更换置放群组失败。</li><br><br>默认取值：false</p>
 * @method array getDisasterRecoverGroupIds() 获取<p>置放群组id列表(目前仅支持指定一个)</p>
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) 设置<p>置放群组id列表(目前仅支持指定一个)</p>
 * @method integer getPartitionNumber() 获取<p>分区置放群组的分区Id，取值范围：1-10，具体取决于所选置放群组的分区数量，如果选中的置放群组是分区置放群组，该值不传默认随机(该功能灰度中)</p>
 * @method void setPartitionNumber(integer $PartitionNumber) 设置<p>分区置放群组的分区Id，取值范围：1-10，具体取决于所选置放群组的分区数量，如果选中的置放群组是分区置放群组，该值不传默认随机(该功能灰度中)</p>
 */
class ModifyInstancesDisasterRecoverGroupRequest extends AbstractModel
{
    /**
     * @var array <p>一个或多个待操作的实例ID。可通过<a href="https://cloud.tencent.com/document/api/213/15728"> DescribeInstances </a>接口返回值中的<code>InstanceId</code>获取。每次请求批量实例的上限为100</p>
     */
    public $InstanceIds;

    /**
     * @var string <p>分散置放群组ID，可使用<a href="https://cloud.tencent.com/document/api/213/17810">DescribeDisasterRecoverGroups</a>接口获取</p>
     * @deprecated
     */
    public $DisasterRecoverGroupId;

    /**
     * @var boolean <p>是否强制更换实例宿主机。取值范围：<br><li>true：表示允许实例更换宿主机，允许重启实例。本地盘子机不支持指定此参数。</li><br><li>false：不允许实例更换宿主机，只在当前宿主机上加入置放群组。这可能导致更换置放群组失败。</li><br><br>默认取值：false</p>
     */
    public $Force;

    /**
     * @var array <p>置放群组id列表(目前仅支持指定一个)</p>
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var integer <p>分区置放群组的分区Id，取值范围：1-10，具体取决于所选置放群组的分区数量，如果选中的置放群组是分区置放群组，该值不传默认随机(该功能灰度中)</p>
     */
    public $PartitionNumber;

    /**
     * @param array $InstanceIds <p>一个或多个待操作的实例ID。可通过<a href="https://cloud.tencent.com/document/api/213/15728"> DescribeInstances </a>接口返回值中的<code>InstanceId</code>获取。每次请求批量实例的上限为100</p>
     * @param string $DisasterRecoverGroupId <p>分散置放群组ID，可使用<a href="https://cloud.tencent.com/document/api/213/17810">DescribeDisasterRecoverGroups</a>接口获取</p>
     * @param boolean $Force <p>是否强制更换实例宿主机。取值范围：<br><li>true：表示允许实例更换宿主机，允许重启实例。本地盘子机不支持指定此参数。</li><br><li>false：不允许实例更换宿主机，只在当前宿主机上加入置放群组。这可能导致更换置放群组失败。</li><br><br>默认取值：false</p>
     * @param array $DisasterRecoverGroupIds <p>置放群组id列表(目前仅支持指定一个)</p>
     * @param integer $PartitionNumber <p>分区置放群组的分区Id，取值范围：1-10，具体取决于所选置放群组的分区数量，如果选中的置放群组是分区置放群组，该值不传默认随机(该功能灰度中)</p>
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("DisasterRecoverGroupId",$param) and $param["DisasterRecoverGroupId"] !== null) {
            $this->DisasterRecoverGroupId = $param["DisasterRecoverGroupId"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("PartitionNumber",$param) and $param["PartitionNumber"] !== null) {
            $this->PartitionNumber = $param["PartitionNumber"];
        }
    }
}
