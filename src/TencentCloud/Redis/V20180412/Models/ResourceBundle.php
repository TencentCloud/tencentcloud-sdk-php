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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * redis独享集群资源包
 *
 * @method string getResourceBundleName() 获取资源包名称
 * @method void setResourceBundleName(string $ResourceBundleName) 设置资源包名称
 * @method integer getAvailableMemory() 获取可售卖内存，单位：GB
 * @method void setAvailableMemory(integer $AvailableMemory) 设置可售卖内存，单位：GB
 * @method integer getCount() 获取资源包个数
 * @method void setCount(integer $Count) 设置资源包个数
 */
class ResourceBundle extends AbstractModel
{
    /**
     * @var string 资源包名称
     */
    public $ResourceBundleName;

    /**
     * @var integer 可售卖内存，单位：GB
     */
    public $AvailableMemory;

    /**
     * @var integer 资源包个数
     */
    public $Count;

    /**
     * @param string $ResourceBundleName 资源包名称
     * @param integer $AvailableMemory 可售卖内存，单位：GB
     * @param integer $Count 资源包个数
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
        if (array_key_exists("ResourceBundleName",$param) and $param["ResourceBundleName"] !== null) {
            $this->ResourceBundleName = $param["ResourceBundleName"];
        }

        if (array_key_exists("AvailableMemory",$param) and $param["AvailableMemory"] !== null) {
            $this->AvailableMemory = $param["AvailableMemory"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
