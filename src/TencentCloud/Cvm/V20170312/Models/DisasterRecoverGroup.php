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
 * 容灾组信息
 *
 * @method string getDisasterRecoverGroupId() 获取<p>分散置放群组id。</p>
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) 设置<p>分散置放群组id。</p>
 * @method string getName() 获取<p>分散置放群组名称，长度1-60个字符。</p>
 * @method void setName(string $Name) 设置<p>分散置放群组名称，长度1-60个字符。</p>
 * @method string getType() 获取<p>分散置放群组类型，取值范围：<br></p><li>HOST：物理机<br></li><li>SW：交换机<br></li><li>RACK：机架</li>
 * @method void setType(string $Type) 设置<p>分散置放群组类型，取值范围：<br></p><li>HOST：物理机<br></li><li>SW：交换机<br></li><li>RACK：机架</li>
 * @method integer getCvmQuotaTotal() 获取<p>分散置放群组内最大容纳云服务器数量。</p>
 * @method void setCvmQuotaTotal(integer $CvmQuotaTotal) 设置<p>分散置放群组内最大容纳云服务器数量。</p>
 * @method integer getCurrentNum() 获取<p>分散置放群组内云服务器当前数量。</p>
 * @method void setCurrentNum(integer $CurrentNum) 设置<p>分散置放群组内云服务器当前数量。</p>
 * @method array getInstanceIds() 获取<p>分散置放群组内，云服务器id列表。</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>分散置放群组内，云服务器id列表。</p>
 * @method string getCreateTime() 获取<p>分散置放群组创建时间。按照<code>ISO8601</code>标准表示，并且使用<code>UTC</code>时间。格式为：<code>YYYY-MM-DDThh:mm:ssZ</code>。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>分散置放群组创建时间。按照<code>ISO8601</code>标准表示，并且使用<code>UTC</code>时间。格式为：<code>YYYY-MM-DDThh:mm:ssZ</code>。</p>
 * @method integer getAffinity() 获取<p>置放群组亲和度</p>
 * @method void setAffinity(integer $Affinity) 设置<p>置放群组亲和度</p>
 * @method string getStrategy() 获取<p>置放群组类型，当前支持两种；分散置放群组和分区置放群组(功能灰度中)，取值范围：PARTITION：分区置放群组，SPREAD：分散置放群组</p>
 * @method void setStrategy(string $Strategy) 设置<p>置放群组类型，当前支持两种；分散置放群组和分区置放群组(功能灰度中)，取值范围：PARTITION：分区置放群组，SPREAD：分散置放群组</p>
 * @method integer getPartitionCount() 获取<p>分区置放群组的分区数量，如果是分区置放群组会返回(功能灰度中)</p>
 * @method void setPartitionCount(integer $PartitionCount) 设置<p>分区置放群组的分区数量，如果是分区置放群组会返回(功能灰度中)</p>
 * @method array getTags() 获取<p>置放群组关联的标签列表。</p>
 * @method void setTags(array $Tags) 设置<p>置放群组关联的标签列表。</p>
 */
class DisasterRecoverGroup extends AbstractModel
{
    /**
     * @var string <p>分散置放群组id。</p>
     */
    public $DisasterRecoverGroupId;

    /**
     * @var string <p>分散置放群组名称，长度1-60个字符。</p>
     */
    public $Name;

    /**
     * @var string <p>分散置放群组类型，取值范围：<br></p><li>HOST：物理机<br></li><li>SW：交换机<br></li><li>RACK：机架</li>
     */
    public $Type;

    /**
     * @var integer <p>分散置放群组内最大容纳云服务器数量。</p>
     */
    public $CvmQuotaTotal;

    /**
     * @var integer <p>分散置放群组内云服务器当前数量。</p>
     */
    public $CurrentNum;

    /**
     * @var array <p>分散置放群组内，云服务器id列表。</p>
     */
    public $InstanceIds;

    /**
     * @var string <p>分散置放群组创建时间。按照<code>ISO8601</code>标准表示，并且使用<code>UTC</code>时间。格式为：<code>YYYY-MM-DDThh:mm:ssZ</code>。</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>置放群组亲和度</p>
     */
    public $Affinity;

    /**
     * @var string <p>置放群组类型，当前支持两种；分散置放群组和分区置放群组(功能灰度中)，取值范围：PARTITION：分区置放群组，SPREAD：分散置放群组</p>
     */
    public $Strategy;

    /**
     * @var integer <p>分区置放群组的分区数量，如果是分区置放群组会返回(功能灰度中)</p>
     */
    public $PartitionCount;

    /**
     * @var array <p>置放群组关联的标签列表。</p>
     */
    public $Tags;

    /**
     * @param string $DisasterRecoverGroupId <p>分散置放群组id。</p>
     * @param string $Name <p>分散置放群组名称，长度1-60个字符。</p>
     * @param string $Type <p>分散置放群组类型，取值范围：<br></p><li>HOST：物理机<br></li><li>SW：交换机<br></li><li>RACK：机架</li>
     * @param integer $CvmQuotaTotal <p>分散置放群组内最大容纳云服务器数量。</p>
     * @param integer $CurrentNum <p>分散置放群组内云服务器当前数量。</p>
     * @param array $InstanceIds <p>分散置放群组内，云服务器id列表。</p>
     * @param string $CreateTime <p>分散置放群组创建时间。按照<code>ISO8601</code>标准表示，并且使用<code>UTC</code>时间。格式为：<code>YYYY-MM-DDThh:mm:ssZ</code>。</p>
     * @param integer $Affinity <p>置放群组亲和度</p>
     * @param string $Strategy <p>置放群组类型，当前支持两种；分散置放群组和分区置放群组(功能灰度中)，取值范围：PARTITION：分区置放群组，SPREAD：分散置放群组</p>
     * @param integer $PartitionCount <p>分区置放群组的分区数量，如果是分区置放群组会返回(功能灰度中)</p>
     * @param array $Tags <p>置放群组关联的标签列表。</p>
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
        if (array_key_exists("DisasterRecoverGroupId",$param) and $param["DisasterRecoverGroupId"] !== null) {
            $this->DisasterRecoverGroupId = $param["DisasterRecoverGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CvmQuotaTotal",$param) and $param["CvmQuotaTotal"] !== null) {
            $this->CvmQuotaTotal = $param["CvmQuotaTotal"];
        }

        if (array_key_exists("CurrentNum",$param) and $param["CurrentNum"] !== null) {
            $this->CurrentNum = $param["CurrentNum"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Affinity",$param) and $param["Affinity"] !== null) {
            $this->Affinity = $param["Affinity"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("PartitionCount",$param) and $param["PartitionCount"] !== null) {
            $this->PartitionCount = $param["PartitionCount"];
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
