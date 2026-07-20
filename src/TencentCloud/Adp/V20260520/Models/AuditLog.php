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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 操作日志
 *
 * @method AccountInfo getAccountInfo() 获取<p>员工信息</p>
 * @method void setAccountInfo(AccountInfo $AccountInfo) 设置<p>员工信息</p>
 * @method string getAppId() 获取<p>应用业务id</p>
 * @method void setAppId(string $AppId) 设置<p>应用业务id</p>
 * @method string getAppName() 获取<p>应用名称</p><p>操作日志触发时的名称</p>
 * @method void setAppName(string $AppName) 设置<p>应用名称</p><p>操作日志触发时的名称</p>
 * @method string getOperateTime() 获取<p>操作时间</p><p>参数格式：秒时间戳</p>
 * @method void setOperateTime(string $OperateTime) 设置<p>操作时间</p><p>参数格式：秒时间戳</p>
 * @method string getAction() 获取<p>操作类型</p>
 * @method void setAction(string $Action) 设置<p>操作类型</p>
 * @method string getBiz() 获取<p>操作对象</p>
 * @method void setBiz(string $Biz) 设置<p>操作对象</p>
 * @method string getContent() 获取<p>操作内容</p>
 * @method void setContent(string $Content) 设置<p>操作内容</p>
 * @method string getUniqueId() 获取<p>操作唯一ID</p>
 * @method void setUniqueId(string $UniqueId) 设置<p>操作唯一ID</p>
 */
class AuditLog extends AbstractModel
{
    /**
     * @var AccountInfo <p>员工信息</p>
     */
    public $AccountInfo;

    /**
     * @var string <p>应用业务id</p>
     */
    public $AppId;

    /**
     * @var string <p>应用名称</p><p>操作日志触发时的名称</p>
     */
    public $AppName;

    /**
     * @var string <p>操作时间</p><p>参数格式：秒时间戳</p>
     */
    public $OperateTime;

    /**
     * @var string <p>操作类型</p>
     */
    public $Action;

    /**
     * @var string <p>操作对象</p>
     */
    public $Biz;

    /**
     * @var string <p>操作内容</p>
     */
    public $Content;

    /**
     * @var string <p>操作唯一ID</p>
     */
    public $UniqueId;

    /**
     * @param AccountInfo $AccountInfo <p>员工信息</p>
     * @param string $AppId <p>应用业务id</p>
     * @param string $AppName <p>应用名称</p><p>操作日志触发时的名称</p>
     * @param string $OperateTime <p>操作时间</p><p>参数格式：秒时间戳</p>
     * @param string $Action <p>操作类型</p>
     * @param string $Biz <p>操作对象</p>
     * @param string $Content <p>操作内容</p>
     * @param string $UniqueId <p>操作唯一ID</p>
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
        if (array_key_exists("AccountInfo",$param) and $param["AccountInfo"] !== null) {
            $this->AccountInfo = new AccountInfo();
            $this->AccountInfo->deserialize($param["AccountInfo"]);
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("OperateTime",$param) and $param["OperateTime"] !== null) {
            $this->OperateTime = $param["OperateTime"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Biz",$param) and $param["Biz"] !== null) {
            $this->Biz = $param["Biz"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("UniqueId",$param) and $param["UniqueId"] !== null) {
            $this->UniqueId = $param["UniqueId"];
        }
    }
}
