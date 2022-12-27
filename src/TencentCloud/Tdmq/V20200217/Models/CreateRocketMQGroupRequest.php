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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRocketMQGroup请求参数结构体
 *
 * @method string getGroupId() 获取Group名称，8~64个字符
 * @method void setGroupId(string $GroupId) 设置Group名称，8~64个字符
 * @method array getNamespaces() 获取命名空间，目前只支持单个命名空间
 * @method void setNamespaces(array $Namespaces) 设置命名空间，目前只支持单个命名空间
 * @method boolean getReadEnable() 获取是否开启消费
 * @method void setReadEnable(boolean $ReadEnable) 设置是否开启消费
 * @method boolean getBroadcastEnable() 获取是否开启广播消费
 * @method void setBroadcastEnable(boolean $BroadcastEnable) 设置是否开启广播消费
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getRemark() 获取说明信息，最长128个字符
 * @method void setRemark(string $Remark) 设置说明信息，最长128个字符
 * @method string getGroupType() 获取Group类型（TCP/HTTP）
 * @method void setGroupType(string $GroupType) 设置Group类型（TCP/HTTP）
 * @method integer getRetryMaxTimes() 获取Group最大重试次数
 * @method void setRetryMaxTimes(integer $RetryMaxTimes) 设置Group最大重试次数
 */
class CreateRocketMQGroupRequest extends AbstractModel
{
    /**
     * @var string Group名称，8~64个字符
     */
    public $GroupId;

    /**
     * @var array 命名空间，目前只支持单个命名空间
     */
    public $Namespaces;

    /**
     * @var boolean 是否开启消费
     */
    public $ReadEnable;

    /**
     * @var boolean 是否开启广播消费
     */
    public $BroadcastEnable;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 说明信息，最长128个字符
     */
    public $Remark;

    /**
     * @var string Group类型（TCP/HTTP）
     */
    public $GroupType;

    /**
     * @var integer Group最大重试次数
     */
    public $RetryMaxTimes;

    /**
     * @param string $GroupId Group名称，8~64个字符
     * @param array $Namespaces 命名空间，目前只支持单个命名空间
     * @param boolean $ReadEnable 是否开启消费
     * @param boolean $BroadcastEnable 是否开启广播消费
     * @param string $ClusterId 集群ID
     * @param string $Remark 说明信息，最长128个字符
     * @param string $GroupType Group类型（TCP/HTTP）
     * @param integer $RetryMaxTimes Group最大重试次数
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Namespaces",$param) and $param["Namespaces"] !== null) {
            $this->Namespaces = $param["Namespaces"];
        }

        if (array_key_exists("ReadEnable",$param) and $param["ReadEnable"] !== null) {
            $this->ReadEnable = $param["ReadEnable"];
        }

        if (array_key_exists("BroadcastEnable",$param) and $param["BroadcastEnable"] !== null) {
            $this->BroadcastEnable = $param["BroadcastEnable"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("RetryMaxTimes",$param) and $param["RetryMaxTimes"] !== null) {
            $this->RetryMaxTimes = $param["RetryMaxTimes"];
        }
    }
}
