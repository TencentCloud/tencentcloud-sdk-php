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
 * ModifyRocketMQNamespace请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getNamespaceId() 获取命名空间名称，3-64个字符，只能包含字母、数字、“-”及“_”
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间名称，3-64个字符，只能包含字母、数字、“-”及“_”
 * @method integer getTtl() 获取已废弃
 * @method void setTtl(integer $Ttl) 设置已废弃
 * @method integer getRetentionTime() 获取已废弃
 * @method void setRetentionTime(integer $RetentionTime) 设置已废弃
 * @method string getRemark() 获取说明，最大128个字符
 * @method void setRemark(string $Remark) 设置说明，最大128个字符
 */
class ModifyRocketMQNamespaceRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 命名空间名称，3-64个字符，只能包含字母、数字、“-”及“_”
     */
    public $NamespaceId;

    /**
     * @var integer 已废弃
     */
    public $Ttl;

    /**
     * @var integer 已废弃
     */
    public $RetentionTime;

    /**
     * @var string 说明，最大128个字符
     */
    public $Remark;

    /**
     * @param string $ClusterId 集群ID
     * @param string $NamespaceId 命名空间名称，3-64个字符，只能包含字母、数字、“-”及“_”
     * @param integer $Ttl 已废弃
     * @param integer $RetentionTime 已废弃
     * @param string $Remark 说明，最大128个字符
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("Ttl",$param) and $param["Ttl"] !== null) {
            $this->Ttl = $param["Ttl"];
        }

        if (array_key_exists("RetentionTime",$param) and $param["RetentionTime"] !== null) {
            $this->RetentionTime = $param["RetentionTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
