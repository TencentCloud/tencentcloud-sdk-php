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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCoolDown请求参数结构体
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method integer getEnable() 获取是否启用 0：不启用 1：启用
 * @method void setEnable(integer $Enable) 设置是否启用 0：不启用 1：启用
 * @method string getBucket() 获取用户存放冷热分层数据Cos桶地址
 * @method void setBucket(string $Bucket) 设置用户存放冷热分层数据Cos桶地址
 */
class UpdateCoolDownRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var integer 是否启用 0：不启用 1：启用
     */
    public $Enable;

    /**
     * @var string 用户存放冷热分层数据Cos桶地址
     */
    public $Bucket;

    /**
     * @param string $InstanceId 集群id
     * @param integer $Enable 是否启用 0：不启用 1：启用
     * @param string $Bucket 用户存放冷热分层数据Cos桶地址
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

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }
    }
}
