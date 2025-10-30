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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteBackUpData请求参数结构体
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method integer getBackUpJobId() 获取任务id
 * @method void setBackUpJobId(integer $BackUpJobId) 设置任务id
 * @method boolean getIsDeleteAll() 获取是否删除所有实例
 * @method void setIsDeleteAll(boolean $IsDeleteAll) 设置是否删除所有实例
 * @method boolean getIsRecover() 获取true代表恢复删除隔离中的job 默认false就是删除
 * @method void setIsRecover(boolean $IsRecover) 设置true代表恢复删除隔离中的job 默认false就是删除
 */
class DeleteBackUpDataRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var integer 任务id
     */
    public $BackUpJobId;

    /**
     * @var boolean 是否删除所有实例
     */
    public $IsDeleteAll;

    /**
     * @var boolean true代表恢复删除隔离中的job 默认false就是删除
     */
    public $IsRecover;

    /**
     * @param string $InstanceId 集群id
     * @param integer $BackUpJobId 任务id
     * @param boolean $IsDeleteAll 是否删除所有实例
     * @param boolean $IsRecover true代表恢复删除隔离中的job 默认false就是删除
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

        if (array_key_exists("BackUpJobId",$param) and $param["BackUpJobId"] !== null) {
            $this->BackUpJobId = $param["BackUpJobId"];
        }

        if (array_key_exists("IsDeleteAll",$param) and $param["IsDeleteAll"] !== null) {
            $this->IsDeleteAll = $param["IsDeleteAll"];
        }

        if (array_key_exists("IsRecover",$param) and $param["IsRecover"] !== null) {
            $this->IsRecover = $param["IsRecover"];
        }
    }
}
