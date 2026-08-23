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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像仓库探测主机参数
 *
 * @method string getInstanceUuid() 获取<p>主机uuid</p>
 * @method void setInstanceUuid(string $InstanceUuid) 设置<p>主机uuid</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getQuuid() 获取<p>主机quuid</p>
 * @method void setQuuid(string $Quuid) 设置<p>主机quuid</p>
 */
class ImageRegistryDetectionHostParam extends AbstractModel
{
    /**
     * @var string <p>主机uuid</p>
     */
    public $InstanceUuid;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>主机quuid</p>
     */
    public $Quuid;

    /**
     * @param string $InstanceUuid <p>主机uuid</p>
     * @param string $Region <p>地域</p>
     * @param string $Quuid <p>主机quuid</p>
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
        if (array_key_exists("InstanceUuid",$param) and $param["InstanceUuid"] !== null) {
            $this->InstanceUuid = $param["InstanceUuid"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }
    }
}
