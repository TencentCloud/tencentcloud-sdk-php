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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteBackUpData请求参数结构体
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method integer getBackUpJobId() 获取任务id
 * @method void setBackUpJobId(integer $BackUpJobId) 设置任务id
 * @method boolean getIsDeleteAll() 获取是否删除所有数据
 * @method void setIsDeleteAll(boolean $IsDeleteAll) 设置是否删除所有数据
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
     * @var boolean 是否删除所有数据
     */
    public $IsDeleteAll;

    /**
     * @param string $InstanceId 集群id
     * @param integer $BackUpJobId 任务id
     * @param boolean $IsDeleteAll 是否删除所有数据
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
    }
}
