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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySkillScanAlertStatus请求参数结构体
 *
 * @method array getIDs() 获取告警记录 ID 列表
入参限制：单次最多 100 个
取值参考：通过 DescribeSkillScanAlertList 接口获取
 * @method void setIDs(array $IDs) 设置告警记录 ID 列表
入参限制：单次最多 100 个
取值参考：通过 DescribeSkillScanAlertList 接口获取
 * @method integer getStatus() 获取目标处理状态
枚举值：
1：已处理
2：已忽略
3：已信任
4：已删除（软删除）
 * @method void setStatus(integer $Status) 设置目标处理状态
枚举值：
1：已处理
2：已忽略
3：已信任
4：已删除（软删除）
 * @method array getMemberId() 获取集团账号的成员 id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员 id
 */
class ModifySkillScanAlertStatusRequest extends AbstractModel
{
    /**
     * @var array 告警记录 ID 列表
入参限制：单次最多 100 个
取值参考：通过 DescribeSkillScanAlertList 接口获取
     */
    public $IDs;

    /**
     * @var integer 目标处理状态
枚举值：
1：已处理
2：已忽略
3：已信任
4：已删除（软删除）
     */
    public $Status;

    /**
     * @var array 集团账号的成员 id
     */
    public $MemberId;

    /**
     * @param array $IDs 告警记录 ID 列表
入参限制：单次最多 100 个
取值参考：通过 DescribeSkillScanAlertList 接口获取
     * @param integer $Status 目标处理状态
枚举值：
1：已处理
2：已忽略
3：已信任
4：已删除（软删除）
     * @param array $MemberId 集团账号的成员 id
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
        if (array_key_exists("IDs",$param) and $param["IDs"] !== null) {
            $this->IDs = $param["IDs"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
