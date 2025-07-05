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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扩容指定配置组
 *
 * @method string getServiceComponentName() 获取组件版本名称 如 HDFS-2.8.5
 * @method void setServiceComponentName(string $ServiceComponentName) 设置组件版本名称 如 HDFS-2.8.5
 * @method string getConfGroupName() 获取配置组名 如hdfs-core-defaultGroup    ConfGroupName参数传入 代表配置组维度 
                                                             ConfGroupName参数不传 默认 代表集群维度
 * @method void setConfGroupName(string $ConfGroupName) 设置配置组名 如hdfs-core-defaultGroup    ConfGroupName参数传入 代表配置组维度 
                                                             ConfGroupName参数不传 默认 代表集群维度
 */
class ScaleOutServiceConfGroupsInfo extends AbstractModel
{
    /**
     * @var string 组件版本名称 如 HDFS-2.8.5
     */
    public $ServiceComponentName;

    /**
     * @var string 配置组名 如hdfs-core-defaultGroup    ConfGroupName参数传入 代表配置组维度 
                                                             ConfGroupName参数不传 默认 代表集群维度
     */
    public $ConfGroupName;

    /**
     * @param string $ServiceComponentName 组件版本名称 如 HDFS-2.8.5
     * @param string $ConfGroupName 配置组名 如hdfs-core-defaultGroup    ConfGroupName参数传入 代表配置组维度 
                                                             ConfGroupName参数不传 默认 代表集群维度
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
        if (array_key_exists("ServiceComponentName",$param) and $param["ServiceComponentName"] !== null) {
            $this->ServiceComponentName = $param["ServiceComponentName"];
        }

        if (array_key_exists("ConfGroupName",$param) and $param["ConfGroupName"] !== null) {
            $this->ConfGroupName = $param["ConfGroupName"];
        }
    }
}
