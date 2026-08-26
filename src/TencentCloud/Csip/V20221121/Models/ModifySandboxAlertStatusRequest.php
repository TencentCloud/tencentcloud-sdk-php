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
 * ModifySandboxAlertStatus请求参数结构体
 *
 * @method string getAlertType() 获取告警类型
枚举值：
ACL：访问控制
DLP：数据泄露防护
LLM_AUDIT：LLM 审计
 * @method void setAlertType(string $AlertType) 设置告警类型
枚举值：
ACL：访问控制
DLP：数据泄露防护
LLM_AUDIT：LLM 审计
 * @method string getBelongAssetType() 获取归属资产类型
枚举值：
HOST：主机
CONTAINER：容器
 * @method void setBelongAssetType(string $BelongAssetType) 设置归属资产类型
枚举值：
HOST：主机
CONTAINER：容器
 * @method array getIDList() 获取告警记录 ID 列表
入参限制：非空，长度 1-100，去重后生效
 * @method void setIDList(array $IDList) 设置告警记录 ID 列表
入参限制：非空，长度 1-100，去重后生效
 * @method string getStatus() 获取目标操作
枚举值：
HANDLED：已处理
IGNORE：已忽略
PASS：已加白
DELETE：删除（不可恢复）
 * @method void setStatus(string $Status) 设置目标操作
枚举值：
HANDLED：已处理
IGNORE：已忽略
PASS：已加白
DELETE：删除（不可恢复）
 */
class ModifySandboxAlertStatusRequest extends AbstractModel
{
    /**
     * @var string 告警类型
枚举值：
ACL：访问控制
DLP：数据泄露防护
LLM_AUDIT：LLM 审计
     */
    public $AlertType;

    /**
     * @var string 归属资产类型
枚举值：
HOST：主机
CONTAINER：容器
     */
    public $BelongAssetType;

    /**
     * @var array 告警记录 ID 列表
入参限制：非空，长度 1-100，去重后生效
     */
    public $IDList;

    /**
     * @var string 目标操作
枚举值：
HANDLED：已处理
IGNORE：已忽略
PASS：已加白
DELETE：删除（不可恢复）
     */
    public $Status;

    /**
     * @param string $AlertType 告警类型
枚举值：
ACL：访问控制
DLP：数据泄露防护
LLM_AUDIT：LLM 审计
     * @param string $BelongAssetType 归属资产类型
枚举值：
HOST：主机
CONTAINER：容器
     * @param array $IDList 告警记录 ID 列表
入参限制：非空，长度 1-100，去重后生效
     * @param string $Status 目标操作
枚举值：
HANDLED：已处理
IGNORE：已忽略
PASS：已加白
DELETE：删除（不可恢复）
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
        if (array_key_exists("AlertType",$param) and $param["AlertType"] !== null) {
            $this->AlertType = $param["AlertType"];
        }

        if (array_key_exists("BelongAssetType",$param) and $param["BelongAssetType"] !== null) {
            $this->BelongAssetType = $param["BelongAssetType"];
        }

        if (array_key_exists("IDList",$param) and $param["IDList"] !== null) {
            $this->IDList = $param["IDList"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
