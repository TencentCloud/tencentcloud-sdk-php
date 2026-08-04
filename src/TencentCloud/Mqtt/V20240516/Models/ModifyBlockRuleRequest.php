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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBlockRule请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method string getName() 获取待修改的封禁规则名
 * @method void setName(string $Name) 设置待修改的封禁规则名
 * @method string getInclude() 获取包含表达式支持*（多个字符）和？（一个字符）
 * @method void setInclude(string $Include) 设置包含表达式支持*（多个字符）和？（一个字符）
 * @method array getExcludes() 获取排除表达式支持*（多个字符）和？（一个字符），最多三条。
 * @method void setExcludes(array $Excludes) 设置排除表达式支持*（多个字符）和？（一个字符），最多三条。
 * @method integer getExpireTime() 获取过期时间，毫秒级时间戳
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间，毫秒级时间戳
 * @method string getRemark() 获取备注，最长 128 字符
 * @method void setRemark(string $Remark) 设置备注，最长 128 字符
 */
class ModifyBlockRuleRequest extends AbstractModel
{
    /**
     * @var string 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var string 待修改的封禁规则名
     */
    public $Name;

    /**
     * @var string 包含表达式支持*（多个字符）和？（一个字符）
     */
    public $Include;

    /**
     * @var array 排除表达式支持*（多个字符）和？（一个字符），最多三条。
     */
    public $Excludes;

    /**
     * @var integer 过期时间，毫秒级时间戳
     */
    public $ExpireTime;

    /**
     * @var string 备注，最长 128 字符
     */
    public $Remark;

    /**
     * @param string $InstanceId 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     * @param string $Name 待修改的封禁规则名
     * @param string $Include 包含表达式支持*（多个字符）和？（一个字符）
     * @param array $Excludes 排除表达式支持*（多个字符）和？（一个字符），最多三条。
     * @param integer $ExpireTime 过期时间，毫秒级时间戳
     * @param string $Remark 备注，最长 128 字符
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Include",$param) and $param["Include"] !== null) {
            $this->Include = $param["Include"];
        }

        if (array_key_exists("Excludes",$param) and $param["Excludes"] !== null) {
            $this->Excludes = $param["Excludes"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
