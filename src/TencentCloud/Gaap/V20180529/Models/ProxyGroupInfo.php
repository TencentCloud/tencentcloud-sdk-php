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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getGroupId() 获取通道组id
 * @method void setGroupId(string $GroupId) 设置通道组id
 * @method string getDomain() 获取通道组域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置通道组域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取通道组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置通道组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method RegionDetail getRealServerRegionInfo() 获取目标地域
 * @method void setRealServerRegionInfo(RegionDetail $RealServerRegionInfo) 设置目标地域
 * @method string getStatus() 获取通道组状态。
其中，
0，运行中；
1，创建中；
4，销毁中；
11，通道迁移中。
 * @method void setStatus(string $Status) 设置通道组状态。
其中，
0，运行中；
1，创建中；
4，销毁中；
11，通道迁移中。
 * @method array getTagSet() 获取标签列表。
 * @method void setTagSet(array $TagSet) 设置标签列表。
 */

/**
 *通道组详情列表
 */
class ProxyGroupInfo extends AbstractModel
{
    /**
     * @var string 通道组id
     */
    public $GroupId;

    /**
     * @var string 通道组域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var string 通道组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var RegionDetail 目标地域
     */
    public $RealServerRegionInfo;

    /**
     * @var string 通道组状态。
其中，
0，运行中；
1，创建中；
4，销毁中；
11，通道迁移中。
     */
    public $Status;

    /**
     * @var array 标签列表。
     */
    public $TagSet;
    /**
     * @param string $GroupId 通道组id
     * @param string $Domain 通道组域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 通道组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectId 项目ID
     * @param RegionDetail $RealServerRegionInfo 目标地域
     * @param string $Status 通道组状态。
其中，
0，运行中；
1，创建中；
4，销毁中；
11，通道迁移中。
     * @param array $TagSet 标签列表。
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RealServerRegionInfo",$param) and $param["RealServerRegionInfo"] !== null) {
            $this->RealServerRegionInfo = new RegionDetail();
            $this->RealServerRegionInfo->deserialize($param["RealServerRegionInfo"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
