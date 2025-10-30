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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * dlc集群信息
 *
 * @method array getComputeResources() 获取dlc资源名称（需要添加角色Uin到dlc中，否则可能获取不到资源）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComputeResources(array $ComputeResources) 设置dlc资源名称（需要添加角色Uin到dlc中，否则可能获取不到资源）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取dlc地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置dlc地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefaultDatabase() 获取指定DLC集群的默认数据库
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultDatabase(string $DefaultDatabase) 设置指定DLC集群的默认数据库
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStandardModeEnvTag() 获取集群配置标记（ 仅对标准模式的项目生效并且标准模式必填），枚举值：
- Prod  (生产环境)
- Dev  (开发环境)
 * @method void setStandardModeEnvTag(string $StandardModeEnvTag) 设置集群配置标记（ 仅对标准模式的项目生效并且标准模式必填），枚举值：
- Prod  (生产环境)
- Dev  (开发环境)
 * @method string getAccessAccount() 获取访问账号（ 仅对标准模式的项目生效并且标准模式必填），用于提交dlc任务的账号
建议使用指定子账号，给子账号设置对应库表的权限；任务负责人模式在负责人离职后容易造成任务失败；主账号模式在多个项目权限不同的情况下不易做权限控制。

枚举值：
- TASK_RUNNER （任务负责人）
- OWNER （主账号模式）
- SUB （子账号模式）
 * @method void setAccessAccount(string $AccessAccount) 设置访问账号（ 仅对标准模式的项目生效并且标准模式必填），用于提交dlc任务的账号
建议使用指定子账号，给子账号设置对应库表的权限；任务负责人模式在负责人离职后容易造成任务失败；主账号模式在多个项目权限不同的情况下不易做权限控制。

枚举值：
- TASK_RUNNER （任务负责人）
- OWNER （主账号模式）
- SUB （子账号模式）
 * @method string getSubAccountUin() 获取子账号id（ 仅对标准模式的项目生效），AccessAccount为子账号模式时，需要指定子账号的id信息，其他模式不需要指定
 * @method void setSubAccountUin(string $SubAccountUin) 设置子账号id（ 仅对标准模式的项目生效），AccessAccount为子账号模式时，需要指定子账号的id信息，其他模式不需要指定
 */
class DLCClusterInfo extends AbstractModel
{
    /**
     * @var array dlc资源名称（需要添加角色Uin到dlc中，否则可能获取不到资源）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComputeResources;

    /**
     * @var string dlc地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 指定DLC集群的默认数据库
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultDatabase;

    /**
     * @var string 集群配置标记（ 仅对标准模式的项目生效并且标准模式必填），枚举值：
- Prod  (生产环境)
- Dev  (开发环境)
     */
    public $StandardModeEnvTag;

    /**
     * @var string 访问账号（ 仅对标准模式的项目生效并且标准模式必填），用于提交dlc任务的账号
建议使用指定子账号，给子账号设置对应库表的权限；任务负责人模式在负责人离职后容易造成任务失败；主账号模式在多个项目权限不同的情况下不易做权限控制。

枚举值：
- TASK_RUNNER （任务负责人）
- OWNER （主账号模式）
- SUB （子账号模式）
     */
    public $AccessAccount;

    /**
     * @var string 子账号id（ 仅对标准模式的项目生效），AccessAccount为子账号模式时，需要指定子账号的id信息，其他模式不需要指定
     */
    public $SubAccountUin;

    /**
     * @param array $ComputeResources dlc资源名称（需要添加角色Uin到dlc中，否则可能获取不到资源）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region dlc地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefaultDatabase 指定DLC集群的默认数据库
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StandardModeEnvTag 集群配置标记（ 仅对标准模式的项目生效并且标准模式必填），枚举值：
- Prod  (生产环境)
- Dev  (开发环境)
     * @param string $AccessAccount 访问账号（ 仅对标准模式的项目生效并且标准模式必填），用于提交dlc任务的账号
建议使用指定子账号，给子账号设置对应库表的权限；任务负责人模式在负责人离职后容易造成任务失败；主账号模式在多个项目权限不同的情况下不易做权限控制。

枚举值：
- TASK_RUNNER （任务负责人）
- OWNER （主账号模式）
- SUB （子账号模式）
     * @param string $SubAccountUin 子账号id（ 仅对标准模式的项目生效），AccessAccount为子账号模式时，需要指定子账号的id信息，其他模式不需要指定
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
        if (array_key_exists("ComputeResources",$param) and $param["ComputeResources"] !== null) {
            $this->ComputeResources = $param["ComputeResources"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("DefaultDatabase",$param) and $param["DefaultDatabase"] !== null) {
            $this->DefaultDatabase = $param["DefaultDatabase"];
        }

        if (array_key_exists("StandardModeEnvTag",$param) and $param["StandardModeEnvTag"] !== null) {
            $this->StandardModeEnvTag = $param["StandardModeEnvTag"];
        }

        if (array_key_exists("AccessAccount",$param) and $param["AccessAccount"] !== null) {
            $this->AccessAccount = $param["AccessAccount"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }
    }
}
