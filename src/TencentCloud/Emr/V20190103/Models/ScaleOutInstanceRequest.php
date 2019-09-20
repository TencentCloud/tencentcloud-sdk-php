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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getTimeUnit() 获取时间单位
 * @method void setTimeUnit(string $TimeUnit) 设置时间单位
 * @method integer getTimeSpan() 获取时间长度
 * @method void setTimeSpan(integer $TimeSpan) 设置时间长度
 * @method string getInstanceId() 获取扩容实例ID
 * @method void setInstanceId(string $InstanceId) 设置扩容实例ID
 * @method integer getPayMode() 获取付费类型
 * @method void setPayMode(integer $PayMode) 设置付费类型
 * @method string getClientToken() 获取Token
 * @method void setClientToken(string $ClientToken) 设置Token
 * @method array getPreExecutedFileSettings() 获取预执行脚本设置
 * @method void setPreExecutedFileSettings(array $PreExecutedFileSettings) 设置预执行脚本设置
 * @method integer getTaskCount() 获取扩容Task节点数量
 * @method void setTaskCount(integer $TaskCount) 设置扩容Task节点数量
 * @method integer getCoreCount() 获取扩容Core节点数量
 * @method void setCoreCount(integer $CoreCount) 设置扩容Core节点数量
 * @method array getUnNecessaryNodeList() 获取扩容时不需要安装的进程
 * @method void setUnNecessaryNodeList(array $UnNecessaryNodeList) 设置扩容时不需要安装的进程
 */

/**
 *ScaleOutInstance请求参数结构体
 */
class ScaleOutInstanceRequest extends AbstractModel
{
    /**
     * @var string 时间单位
     */
    public $TimeUnit;

    /**
     * @var integer 时间长度
     */
    public $TimeSpan;

    /**
     * @var string 扩容实例ID
     */
    public $InstanceId;

    /**
     * @var integer 付费类型
     */
    public $PayMode;

    /**
     * @var string Token
     */
    public $ClientToken;

    /**
     * @var array 预执行脚本设置
     */
    public $PreExecutedFileSettings;

    /**
     * @var integer 扩容Task节点数量
     */
    public $TaskCount;

    /**
     * @var integer 扩容Core节点数量
     */
    public $CoreCount;

    /**
     * @var array 扩容时不需要安装的进程
     */
    public $UnNecessaryNodeList;
    /**
     * @param string $TimeUnit 时间单位
     * @param integer $TimeSpan 时间长度
     * @param string $InstanceId 扩容实例ID
     * @param integer $PayMode 付费类型
     * @param string $ClientToken Token
     * @param array $PreExecutedFileSettings 预执行脚本设置
     * @param integer $TaskCount 扩容Task节点数量
     * @param integer $CoreCount 扩容Core节点数量
     * @param array $UnNecessaryNodeList 扩容时不需要安装的进程
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
        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("PreExecutedFileSettings",$param) and $param["PreExecutedFileSettings"] !== null) {
            $this->PreExecutedFileSettings = [];
            foreach ($param["PreExecutedFileSettings"] as $key => $value){
                $obj = new PreExecuteFileSettings();
                $obj->deserialize($value);
                array_push($this->PreExecutedFileSettings, $obj);
            }
        }

        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("CoreCount",$param) and $param["CoreCount"] !== null) {
            $this->CoreCount = $param["CoreCount"];
        }

        if (array_key_exists("UnNecessaryNodeList",$param) and $param["UnNecessaryNodeList"] !== null) {
            $this->UnNecessaryNodeList = $param["UnNecessaryNodeList"];
        }
    }
}
