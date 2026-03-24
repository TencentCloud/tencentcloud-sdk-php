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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAggregateConfigDeliver请求参数结构体
 *
 * @method integer getStatus() 获取0 关闭  1 开启
 * @method void setStatus(integer $Status) 设置0 关闭  1 开启
 * @method string getAccountGroupId() 获取账号组ID
 * @method void setAccountGroupId(string $AccountGroupId) 设置账号组ID
 * @method string getDeliverName() 获取投递服务名称
 * @method void setDeliverName(string $DeliverName) 设置投递服务名称
 * @method string getTargetArn() 获取资源六段式  
COS：qcs::cos:$region:$account:prefix/$appid/$BucketName
CLS:
qcs::cls:$region:$account:cls/topicId
 * @method void setTargetArn(string $TargetArn) 设置资源六段式  
COS：qcs::cos:$region:$account:prefix/$appid/$BucketName
CLS:
qcs::cls:$region:$account:cls/topicId
 * @method string getDeliverPrefix() 获取资源前缀
 * @method void setDeliverPrefix(string $DeliverPrefix) 设置资源前缀
 * @method string getDeliverType() 获取投递类型  COS CLS
 * @method void setDeliverType(string $DeliverType) 设置投递类型  COS CLS
 * @method integer getDeliverUin() 获取支持跨账号投递的成员账号uin，只能是委派管理员。默认为0，即投递到管理员账号下
 * @method void setDeliverUin(integer $DeliverUin) 设置支持跨账号投递的成员账号uin，只能是委派管理员。默认为0，即投递到管理员账号下
 * @method integer getDeliverContentType() 获取1：配置变更 2： 资源列表 3：全选
 * @method void setDeliverContentType(integer $DeliverContentType) 设置1：配置变更 2： 资源列表 3：全选
 */
class UpdateAggregateConfigDeliverRequest extends AbstractModel
{
    /**
     * @var integer 0 关闭  1 开启
     */
    public $Status;

    /**
     * @var string 账号组ID
     */
    public $AccountGroupId;

    /**
     * @var string 投递服务名称
     */
    public $DeliverName;

    /**
     * @var string 资源六段式  
COS：qcs::cos:$region:$account:prefix/$appid/$BucketName
CLS:
qcs::cls:$region:$account:cls/topicId
     */
    public $TargetArn;

    /**
     * @var string 资源前缀
     */
    public $DeliverPrefix;

    /**
     * @var string 投递类型  COS CLS
     */
    public $DeliverType;

    /**
     * @var integer 支持跨账号投递的成员账号uin，只能是委派管理员。默认为0，即投递到管理员账号下
     */
    public $DeliverUin;

    /**
     * @var integer 1：配置变更 2： 资源列表 3：全选
     */
    public $DeliverContentType;

    /**
     * @param integer $Status 0 关闭  1 开启
     * @param string $AccountGroupId 账号组ID
     * @param string $DeliverName 投递服务名称
     * @param string $TargetArn 资源六段式  
COS：qcs::cos:$region:$account:prefix/$appid/$BucketName
CLS:
qcs::cls:$region:$account:cls/topicId
     * @param string $DeliverPrefix 资源前缀
     * @param string $DeliverType 投递类型  COS CLS
     * @param integer $DeliverUin 支持跨账号投递的成员账号uin，只能是委派管理员。默认为0，即投递到管理员账号下
     * @param integer $DeliverContentType 1：配置变更 2： 资源列表 3：全选
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("DeliverName",$param) and $param["DeliverName"] !== null) {
            $this->DeliverName = $param["DeliverName"];
        }

        if (array_key_exists("TargetArn",$param) and $param["TargetArn"] !== null) {
            $this->TargetArn = $param["TargetArn"];
        }

        if (array_key_exists("DeliverPrefix",$param) and $param["DeliverPrefix"] !== null) {
            $this->DeliverPrefix = $param["DeliverPrefix"];
        }

        if (array_key_exists("DeliverType",$param) and $param["DeliverType"] !== null) {
            $this->DeliverType = $param["DeliverType"];
        }

        if (array_key_exists("DeliverUin",$param) and $param["DeliverUin"] !== null) {
            $this->DeliverUin = $param["DeliverUin"];
        }

        if (array_key_exists("DeliverContentType",$param) and $param["DeliverContentType"] !== null) {
            $this->DeliverContentType = $param["DeliverContentType"];
        }
    }
}
