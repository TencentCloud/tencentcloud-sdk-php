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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述工作空间的信息
 *
 * @method string getSpaceId() 获取工作空间ID
 * @method void setSpaceId(string $SpaceId) 设置工作空间ID
 * @method string getSpaceFamily() 获取工作空间类型
 * @method void setSpaceFamily(string $SpaceFamily) 设置工作空间类型
 * @method string getSpaceType() 获取工作空间规格
 * @method void setSpaceType(string $SpaceType) 设置工作空间规格
 * @method string getSpaceName() 获取工作空间名称
 * @method void setSpaceName(string $SpaceName) 设置工作空间名称
 * @method string getSpaceState() 获取工作空间状态。取值范围：<br><li>PENDING：表示创建中<br></li><li>LAUNCH_FAILED：表示创建失败<br></li><li>ONLINE：表示运行中<br></li><li>ARREARS：表示隔离中<br></li><li>TERMINATING：表示销毁中。<br></li>
 * @method void setSpaceState(string $SpaceState) 设置工作空间状态。取值范围：<br><li>PENDING：表示创建中<br></li><li>LAUNCH_FAILED：表示创建失败<br></li><li>ONLINE：表示运行中<br></li><li>ARREARS：表示隔离中<br></li><li>TERMINATING：表示销毁中。<br></li>
 * @method string getSpaceChargeType() 获取工作空间计费模式
 * @method void setSpaceChargeType(string $SpaceChargeType) 设置工作空间计费模式
 * @method string getResourceId() 获取工作空间对应资源ID
 * @method void setResourceId(string $ResourceId) 设置工作空间对应资源ID
 * @method string getRenewFlag() 获取自动续费标识
 * @method void setRenewFlag(string $RenewFlag) 设置自动续费标识
 * @method array getTags() 获取工作空间关联的工作列表
 * @method void setTags(array $Tags) 设置工作空间关联的工作列表
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getExpiredTime() 获取到期时间
 * @method void setExpiredTime(string $ExpiredTime) 设置到期时间
 * @method Placement getPlacement() 获取工作空间所在位置
 * @method void setPlacement(Placement $Placement) 设置工作空间所在位置
 * @method string getLatestOperation() 获取工作空间的最新操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperation(string $LatestOperation) 设置工作空间的最新操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestOperationState() 获取工作空间的最新操作状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperationState(string $LatestOperationState) 设置工作空间的最新操作状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class SpaceInfo extends AbstractModel
{
    /**
     * @var string 工作空间ID
     */
    public $SpaceId;

    /**
     * @var string 工作空间类型
     */
    public $SpaceFamily;

    /**
     * @var string 工作空间规格
     */
    public $SpaceType;

    /**
     * @var string 工作空间名称
     */
    public $SpaceName;

    /**
     * @var string 工作空间状态。取值范围：<br><li>PENDING：表示创建中<br></li><li>LAUNCH_FAILED：表示创建失败<br></li><li>ONLINE：表示运行中<br></li><li>ARREARS：表示隔离中<br></li><li>TERMINATING：表示销毁中。<br></li>
     */
    public $SpaceState;

    /**
     * @var string 工作空间计费模式
     */
    public $SpaceChargeType;

    /**
     * @var string 工作空间对应资源ID
     */
    public $ResourceId;

    /**
     * @var string 自动续费标识
     */
    public $RenewFlag;

    /**
     * @var array 工作空间关联的工作列表
     */
    public $Tags;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string 到期时间
     */
    public $ExpiredTime;

    /**
     * @var Placement 工作空间所在位置
     */
    public $Placement;

    /**
     * @var string 工作空间的最新操作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperation;

    /**
     * @var string 工作空间的最新操作状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperationState;

    /**
     * @param string $SpaceId 工作空间ID
     * @param string $SpaceFamily 工作空间类型
     * @param string $SpaceType 工作空间规格
     * @param string $SpaceName 工作空间名称
     * @param string $SpaceState 工作空间状态。取值范围：<br><li>PENDING：表示创建中<br></li><li>LAUNCH_FAILED：表示创建失败<br></li><li>ONLINE：表示运行中<br></li><li>ARREARS：表示隔离中<br></li><li>TERMINATING：表示销毁中。<br></li>
     * @param string $SpaceChargeType 工作空间计费模式
     * @param string $ResourceId 工作空间对应资源ID
     * @param string $RenewFlag 自动续费标识
     * @param array $Tags 工作空间关联的工作列表
     * @param string $CreatedTime 创建时间
     * @param string $ExpiredTime 到期时间
     * @param Placement $Placement 工作空间所在位置
     * @param string $LatestOperation 工作空间的最新操作
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestOperationState 工作空间的最新操作状态
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}
