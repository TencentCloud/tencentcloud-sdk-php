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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户配额信息
 *
 * @method string getQuotaId() 获取配额id
 * @method void setQuotaId(string $QuotaId) 设置配额id
 * @method string getQuotaType() 获取配额类型
 * @method void setQuotaType(string $QuotaType) 设置配额类型
 * @method string getQuotaObjectName() 获取配额对象名称，对应UID/GID的值
 * @method void setQuotaObjectName(string $QuotaObjectName) 设置配额对象名称，对应UID/GID的值
 * @method string getQuotaSizeLimit() 获取容量配额限定值
 * @method void setQuotaSizeLimit(string $QuotaSizeLimit) 设置容量配额限定值
 * @method string getQuotaSizeUsed() 获取已使用容量配额
 * @method void setQuotaSizeUsed(string $QuotaSizeUsed) 设置已使用容量配额
 * @method string getQuotaSizeUsedPercent() 获取容量配额使用占比
 * @method void setQuotaSizeUsedPercent(string $QuotaSizeUsedPercent) 设置容量配额使用占比
 * @method string getQuotaFilesLimit() 获取文件数配额限定值
 * @method void setQuotaFilesLimit(string $QuotaFilesLimit) 设置文件数配额限定值
 * @method string getQuotaFilesUsed() 获取已使用文件数配额
 * @method void setQuotaFilesUsed(string $QuotaFilesUsed) 设置已使用文件数配额
 * @method string getQuotaFilesUsedPercent() 获取文件数配额使用占比
 * @method void setQuotaFilesUsedPercent(string $QuotaFilesUsedPercent) 设置文件数配额使用占比
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method string getStatus() 获取配额状态：creating 配置中 active 已生效 modify 修改中
 * @method void setStatus(string $Status) 设置配额状态：creating 配置中 active 已生效 modify 修改中
 */
class UserQuotaInfo extends AbstractModel
{
    /**
     * @var string 配额id
     */
    public $QuotaId;

    /**
     * @var string 配额类型
     */
    public $QuotaType;

    /**
     * @var string 配额对象名称，对应UID/GID的值
     */
    public $QuotaObjectName;

    /**
     * @var string 容量配额限定值
     */
    public $QuotaSizeLimit;

    /**
     * @var string 已使用容量配额
     */
    public $QuotaSizeUsed;

    /**
     * @var string 容量配额使用占比
     */
    public $QuotaSizeUsedPercent;

    /**
     * @var string 文件数配额限定值
     */
    public $QuotaFilesLimit;

    /**
     * @var string 已使用文件数配额
     */
    public $QuotaFilesUsed;

    /**
     * @var string 文件数配额使用占比
     */
    public $QuotaFilesUsedPercent;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var string 配额状态：creating 配置中 active 已生效 modify 修改中
     */
    public $Status;

    /**
     * @param string $QuotaId 配额id
     * @param string $QuotaType 配额类型
     * @param string $QuotaObjectName 配额对象名称，对应UID/GID的值
     * @param string $QuotaSizeLimit 容量配额限定值
     * @param string $QuotaSizeUsed 已使用容量配额
     * @param string $QuotaSizeUsedPercent 容量配额使用占比
     * @param string $QuotaFilesLimit 文件数配额限定值
     * @param string $QuotaFilesUsed 已使用文件数配额
     * @param string $QuotaFilesUsedPercent 文件数配额使用占比
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
     * @param string $Status 配额状态：creating 配置中 active 已生效 modify 修改中
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
        if (array_key_exists("QuotaId",$param) and $param["QuotaId"] !== null) {
            $this->QuotaId = $param["QuotaId"];
        }

        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("QuotaObjectName",$param) and $param["QuotaObjectName"] !== null) {
            $this->QuotaObjectName = $param["QuotaObjectName"];
        }

        if (array_key_exists("QuotaSizeLimit",$param) and $param["QuotaSizeLimit"] !== null) {
            $this->QuotaSizeLimit = $param["QuotaSizeLimit"];
        }

        if (array_key_exists("QuotaSizeUsed",$param) and $param["QuotaSizeUsed"] !== null) {
            $this->QuotaSizeUsed = $param["QuotaSizeUsed"];
        }

        if (array_key_exists("QuotaSizeUsedPercent",$param) and $param["QuotaSizeUsedPercent"] !== null) {
            $this->QuotaSizeUsedPercent = $param["QuotaSizeUsedPercent"];
        }

        if (array_key_exists("QuotaFilesLimit",$param) and $param["QuotaFilesLimit"] !== null) {
            $this->QuotaFilesLimit = $param["QuotaFilesLimit"];
        }

        if (array_key_exists("QuotaFilesUsed",$param) and $param["QuotaFilesUsed"] !== null) {
            $this->QuotaFilesUsed = $param["QuotaFilesUsed"];
        }

        if (array_key_exists("QuotaFilesUsedPercent",$param) and $param["QuotaFilesUsedPercent"] !== null) {
            $this->QuotaFilesUsedPercent = $param["QuotaFilesUsedPercent"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
