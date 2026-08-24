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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDisasterRecoveryProtectGroup请求参数结构体
 *
 * @method string getSitePairId() 获取所属容灾站点对id
 * @method void setSitePairId(string $SitePairId) 设置所属容灾站点对id
 * @method string getProtectGroupType() 获取容灾保护组的产品类型
 * @method void setProtectGroupType(string $ProtectGroupType) 设置容灾保护组的产品类型
 * @method integer getRecoveryPointObjective() 获取容灾保护组预期rpo, 单位分钟（当前仅支持15分钟）
 * @method void setRecoveryPointObjective(integer $RecoveryPointObjective) 设置容灾保护组预期rpo, 单位分钟（当前仅支持15分钟）
 * @method string getProtectGroupName() 获取容灾保护组的名称，最大长度不能超60个字符。
 * @method void setProtectGroupName(string $ProtectGroupName) 设置容灾保护组的名称，最大长度不能超60个字符。
 * @method string getDataDirection() 获取数据复制方向， ['POSITIVE', 'REVERSE']
 * @method void setDataDirection(string $DataDirection) 设置数据复制方向， ['POSITIVE', 'REVERSE']
 */
class CreateDisasterRecoveryProtectGroupRequest extends AbstractModel
{
    /**
     * @var string 所属容灾站点对id
     */
    public $SitePairId;

    /**
     * @var string 容灾保护组的产品类型
     */
    public $ProtectGroupType;

    /**
     * @var integer 容灾保护组预期rpo, 单位分钟（当前仅支持15分钟）
     */
    public $RecoveryPointObjective;

    /**
     * @var string 容灾保护组的名称，最大长度不能超60个字符。
     */
    public $ProtectGroupName;

    /**
     * @var string 数据复制方向， ['POSITIVE', 'REVERSE']
     */
    public $DataDirection;

    /**
     * @param string $SitePairId 所属容灾站点对id
     * @param string $ProtectGroupType 容灾保护组的产品类型
     * @param integer $RecoveryPointObjective 容灾保护组预期rpo, 单位分钟（当前仅支持15分钟）
     * @param string $ProtectGroupName 容灾保护组的名称，最大长度不能超60个字符。
     * @param string $DataDirection 数据复制方向， ['POSITIVE', 'REVERSE']
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
        if (array_key_exists("SitePairId",$param) and $param["SitePairId"] !== null) {
            $this->SitePairId = $param["SitePairId"];
        }

        if (array_key_exists("ProtectGroupType",$param) and $param["ProtectGroupType"] !== null) {
            $this->ProtectGroupType = $param["ProtectGroupType"];
        }

        if (array_key_exists("RecoveryPointObjective",$param) and $param["RecoveryPointObjective"] !== null) {
            $this->RecoveryPointObjective = $param["RecoveryPointObjective"];
        }

        if (array_key_exists("ProtectGroupName",$param) and $param["ProtectGroupName"] !== null) {
            $this->ProtectGroupName = $param["ProtectGroupName"];
        }

        if (array_key_exists("DataDirection",$param) and $param["DataDirection"] !== null) {
            $this->DataDirection = $param["DataDirection"];
        }
    }
}
