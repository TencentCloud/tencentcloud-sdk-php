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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulDefenceSetting返回参数结构体
 *
 * @method integer getEnable() 获取防御开关，0 关闭 1 开启
 * @method void setEnable(integer $Enable) 设置防御开关，0 关闭 1 开启
 * @method integer getScope() 获取影响范围：1 全网旗舰版主机，0 quuid列表主机
 * @method void setScope(integer $Scope) 设置影响范围：1 全网旗舰版主机，0 quuid列表主机
 * @method array getQuuids() 获取影响主机quuid列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuuids(array $Quuids) 设置影响主机quuid列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFlagshipCount() 获取当前旗舰版主机数量
 * @method void setFlagshipCount(integer $FlagshipCount) 设置当前旗舰版主机数量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulDefenceSettingResponse extends AbstractModel
{
    /**
     * @var integer 防御开关，0 关闭 1 开启
     */
    public $Enable;

    /**
     * @var integer 影响范围：1 全网旗舰版主机，0 quuid列表主机
     */
    public $Scope;

    /**
     * @var array 影响主机quuid列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Quuids;

    /**
     * @var integer 当前旗舰版主机数量
     */
    public $FlagshipCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Enable 防御开关，0 关闭 1 开启
     * @param integer $Scope 影响范围：1 全网旗舰版主机，0 quuid列表主机
     * @param array $Quuids 影响主机quuid列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FlagshipCount 当前旗舰版主机数量
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("FlagshipCount",$param) and $param["FlagshipCount"] !== null) {
            $this->FlagshipCount = $param["FlagshipCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
