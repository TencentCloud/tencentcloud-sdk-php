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
 * UpdateConfigDeliver请求参数结构体
 *
 * @method integer getStatus() 获取0 关闭  1 开启
 * @method void setStatus(integer $Status) 设置0 关闭  1 开启
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
 * @method string getDeliverPrefix() 获取clonfig_fix
 * @method void setDeliverPrefix(string $DeliverPrefix) 设置clonfig_fix
 * @method string getDeliverType() 获取投递类型
 * @method void setDeliverType(string $DeliverType) 设置投递类型
 * @method integer getDeliverContentType() 获取1：配置变更 2： 资源列表 3：全选
 * @method void setDeliverContentType(integer $DeliverContentType) 设置1：配置变更 2： 资源列表 3：全选
 */
class UpdateConfigDeliverRequest extends AbstractModel
{
    /**
     * @var integer 0 关闭  1 开启
     */
    public $Status;

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
     * @var string clonfig_fix
     */
    public $DeliverPrefix;

    /**
     * @var string 投递类型
     */
    public $DeliverType;

    /**
     * @var integer 1：配置变更 2： 资源列表 3：全选
     */
    public $DeliverContentType;

    /**
     * @param integer $Status 0 关闭  1 开启
     * @param string $DeliverName 投递服务名称
     * @param string $TargetArn 资源六段式  
COS：qcs::cos:$region:$account:prefix/$appid/$BucketName
CLS:
qcs::cls:$region:$account:cls/topicId
     * @param string $DeliverPrefix clonfig_fix
     * @param string $DeliverType 投递类型
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

        if (array_key_exists("DeliverContentType",$param) and $param["DeliverContentType"] !== null) {
            $this->DeliverContentType = $param["DeliverContentType"];
        }
    }
}
