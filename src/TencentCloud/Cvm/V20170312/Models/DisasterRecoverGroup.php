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
 * @method string getDisasterRecoverGroupId() 获取分散置放群组id。
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) 设置分散置放群组id。
 * @method string getName() 获取分散置放群组名称，长度1-60个字符。
 * @method void setName(string $Name) 设置分散置放群组名称，长度1-60个字符。
 * @method string getType() 获取分散置放群组类型，取值范围：<br>
<li>HOST：物理机<br></li>
<li>SW：交换机<br></li>
<li>RACK：机架</li>
 * @method void setType(string $Type) 设置分散置放群组类型，取值范围：<br>
<li>HOST：物理机<br></li>
<li>SW：交换机<br></li>
<li>RACK：机架</li>
 * @method integer getCvmQuotaTotal() 获取分散置放群组内最大容纳云服务器数量。
 * @method void setCvmQuotaTotal(integer $CvmQuotaTotal) 设置分散置放群组内最大容纳云服务器数量。
 * @method integer getCurrentNum() 获取分散置放群组内云服务器当前数量。
 * @method void setCurrentNum(integer $CurrentNum) 设置分散置放群组内云服务器当前数量。
 * @method array getInstanceIds() 获取分散置放群组内，云服务器id列表。
 * @method void setInstanceIds(array $InstanceIds) 设置分散置放群组内，云服务器id列表。
 * @method string getCreateTime() 获取分散置放群组创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 * @method void setCreateTime(string $CreateTime) 设置分散置放群组创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 * @method integer getAffinity() 获取置放群组亲和度
 * @method void setAffinity(integer $Affinity) 设置置放群组亲和度
 * @method array getTags() 获取置放群组关联的标签列表。
 * @method void setTags(array $Tags) 设置置放群组关联的标签列表。
 */
class DisasterRecoverGroup extends AbstractModel
{
    /**
     * @var string 分散置放群组id。
     */
    public $DisasterRecoverGroupId;

    /**
     * @var string 分散置放群组名称，长度1-60个字符。
     */
    public $Name;

    /**
     * @var string 分散置放群组类型，取值范围：<br>
<li>HOST：物理机<br></li>
<li>SW：交换机<br></li>
<li>RACK：机架</li>
     */
    public $Type;

    /**
     * @var integer 分散置放群组内最大容纳云服务器数量。
     */
    public $CvmQuotaTotal;

    /**
     * @var integer 分散置放群组内云服务器当前数量。
     */
    public $CurrentNum;

    /**
     * @var array 分散置放群组内，云服务器id列表。
     */
    public $InstanceIds;

    /**
     * @var string 分散置放群组创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
     */
    public $CreateTime;

    /**
     * @var integer 置放群组亲和度
     */
    public $Affinity;

    /**
     * @var array 置放群组关联的标签列表。
     */
    public $Tags;

    /**
     * @param string $DisasterRecoverGroupId 分散置放群组id。
     * @param string $Name 分散置放群组名称，长度1-60个字符。
     * @param string $Type 分散置放群组类型，取值范围：<br>
<li>HOST：物理机<br></li>
<li>SW：交换机<br></li>
<li>RACK：机架</li>
     * @param integer $CvmQuotaTotal 分散置放群组内最大容纳云服务器数量。
     * @param integer $CurrentNum 分散置放群组内云服务器当前数量。
     * @param array $InstanceIds 分散置放群组内，云服务器id列表。
     * @param string $CreateTime 分散置放群组创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
     * @param integer $Affinity 置放群组亲和度
     * @param array $Tags 置放群组关联的标签列表。
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
