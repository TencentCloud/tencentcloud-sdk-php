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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述工作空间的信息
 *
 * @method string getSpaceId() 获取<p>工作空间ID</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>工作空间ID</p>
 * @method string getSpaceClass() 获取<p>工作空间类别</p>
 * @method void setSpaceClass(string $SpaceClass) 设置<p>工作空间类别</p>
 * @method string getSpaceFamily() 获取<p>工作空间类型</p>
 * @method void setSpaceFamily(string $SpaceFamily) 设置<p>工作空间类型</p>
 * @method string getSpaceType() 获取<p>工作空间规格</p>
 * @method void setSpaceType(string $SpaceType) 设置<p>工作空间规格</p>
 * @method string getSpaceName() 获取<p>工作空间名称</p>
 * @method void setSpaceName(string $SpaceName) 设置<p>工作空间名称</p>
 * @method string getSpaceState() 获取<p>工作空间状态。取值范围：<br><li>PENDING：表示创建中<br></li><li>LAUNCH_FAILED：表示创建失败<br></li><li>ONLINE：表示运行中<br></li><li>ARREARS：表示隔离中<br></li><li>TERMINATING：表示销毁中。<br></li></p>
 * @method void setSpaceState(string $SpaceState) 设置<p>工作空间状态。取值范围：<br><li>PENDING：表示创建中<br></li><li>LAUNCH_FAILED：表示创建失败<br></li><li>ONLINE：表示运行中<br></li><li>ARREARS：表示隔离中<br></li><li>TERMINATING：表示销毁中。<br></li></p>
 * @method string getSpaceChargeType() 获取<p>工作空间计费模式</p>
 * @method void setSpaceChargeType(string $SpaceChargeType) 设置<p>工作空间计费模式</p>
 * @method string getResourceId() 获取<p>工作空间对应资源ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>工作空间对应资源ID</p>
 * @method string getRenewFlag() 获取<p>自动续费标识</p>
 * @method void setRenewFlag(string $RenewFlag) 设置<p>自动续费标识</p>
 * @method array getTags() 获取<p>工作空间关联的工作列表</p>
 * @method void setTags(array $Tags) 设置<p>工作空间关联的工作列表</p>
 * @method string getCreatedTime() 获取<p>创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
 * @method string getExpiredTime() 获取<p>到期时间</p>
 * @method void setExpiredTime(string $ExpiredTime) 设置<p>到期时间</p>
 * @method Placement getPlacement() 获取<p>工作空间所在位置</p>
 * @method void setPlacement(Placement $Placement) 设置<p>工作空间所在位置</p>
 * @method string getLatestOperation() 获取<p>工作空间的最新操作</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperation(string $LatestOperation) 设置<p>工作空间的最新操作</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestOperationState() 获取<p>工作空间的最新操作状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperationState(string $LatestOperationState) 设置<p>工作空间的最新操作状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPrivateIpAddresses() 获取<p>实例的内网IP</p>
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置<p>实例的内网IP</p>
 */
class SpaceInfo extends AbstractModel
{
    /**
     * @var string <p>工作空间ID</p>
     */
    public $SpaceId;

    /**
     * @var string <p>工作空间类别</p>
     */
    public $SpaceClass;

    /**
     * @var string <p>工作空间类型</p>
     */
    public $SpaceFamily;

    /**
     * @var string <p>工作空间规格</p>
     */
    public $SpaceType;

    /**
     * @var string <p>工作空间名称</p>
     */
    public $SpaceName;

    /**
     * @var string <p>工作空间状态。取值范围：<br><li>PENDING：表示创建中<br></li><li>LAUNCH_FAILED：表示创建失败<br></li><li>ONLINE：表示运行中<br></li><li>ARREARS：表示隔离中<br></li><li>TERMINATING：表示销毁中。<br></li></p>
     */
    public $SpaceState;

    /**
     * @var string <p>工作空间计费模式</p>
     */
    public $SpaceChargeType;

    /**
     * @var string <p>工作空间对应资源ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>自动续费标识</p>
     */
    public $RenewFlag;

    /**
     * @var array <p>工作空间关联的工作列表</p>
     */
    public $Tags;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>到期时间</p>
     */
    public $ExpiredTime;

    /**
     * @var Placement <p>工作空间所在位置</p>
     */
    public $Placement;

    /**
     * @var string <p>工作空间的最新操作</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperation;

    /**
     * @var string <p>工作空间的最新操作状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperationState;

    /**
     * @var array <p>实例的内网IP</p>
     */
    public $PrivateIpAddresses;

    /**
     * @param string $SpaceId <p>工作空间ID</p>
     * @param string $SpaceClass <p>工作空间类别</p>
     * @param string $SpaceFamily <p>工作空间类型</p>
     * @param string $SpaceType <p>工作空间规格</p>
     * @param string $SpaceName <p>工作空间名称</p>
     * @param string $SpaceState <p>工作空间状态。取值范围：<br><li>PENDING：表示创建中<br></li><li>LAUNCH_FAILED：表示创建失败<br></li><li>ONLINE：表示运行中<br></li><li>ARREARS：表示隔离中<br></li><li>TERMINATING：表示销毁中。<br></li></p>
     * @param string $SpaceChargeType <p>工作空间计费模式</p>
     * @param string $ResourceId <p>工作空间对应资源ID</p>
     * @param string $RenewFlag <p>自动续费标识</p>
     * @param array $Tags <p>工作空间关联的工作列表</p>
     * @param string $CreatedTime <p>创建时间</p>
     * @param string $ExpiredTime <p>到期时间</p>
     * @param Placement $Placement <p>工作空间所在位置</p>
     * @param string $LatestOperation <p>工作空间的最新操作</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestOperationState <p>工作空间的最新操作状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PrivateIpAddresses <p>实例的内网IP</p>
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("SpaceClass",$param) and $param["SpaceClass"] !== null) {
            $this->SpaceClass = $param["SpaceClass"];
        }

        if (array_key_exists("SpaceFamily",$param) and $param["SpaceFamily"] !== null) {
            $this->SpaceFamily = $param["SpaceFamily"];
        }

        if (array_key_exists("SpaceType",$param) and $param["SpaceType"] !== null) {
            $this->SpaceType = $param["SpaceType"];
        }

        if (array_key_exists("SpaceName",$param) and $param["SpaceName"] !== null) {
            $this->SpaceName = $param["SpaceName"];
        }

        if (array_key_exists("SpaceState",$param) and $param["SpaceState"] !== null) {
            $this->SpaceState = $param["SpaceState"];
        }

        if (array_key_exists("SpaceChargeType",$param) and $param["SpaceChargeType"] !== null) {
            $this->SpaceChargeType = $param["SpaceChargeType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("LatestOperation",$param) and $param["LatestOperation"] !== null) {
            $this->LatestOperation = $param["LatestOperation"];
        }

        if (array_key_exists("LatestOperationState",$param) and $param["LatestOperationState"] !== null) {
            $this->LatestOperationState = $param["LatestOperationState"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }
    }
}
