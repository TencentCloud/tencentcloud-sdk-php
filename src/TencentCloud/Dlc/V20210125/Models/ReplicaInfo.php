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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 副本信息
 *
 * @method integer getDesired() 获取<p>期望副本数</p>
 * @method void setDesired(integer $Desired) 设置<p>期望副本数</p>
 * @method integer getAvailable() 获取<p>可用（就绪）副本数</p>
 * @method void setAvailable(integer $Available) 设置<p>可用（就绪）副本数</p>
 */
class ReplicaInfo extends AbstractModel
{
    /**
     * @var integer <p>期望副本数</p>
     */
    public $Desired;

    /**
     * @var integer <p>可用（就绪）副本数</p>
     */
    public $Available;

    /**
     * @param integer $Desired <p>期望副本数</p>
     * @param integer $Available <p>可用（就绪）副本数</p>
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
        if (array_key_exists("Desired",$param) and $param["Desired"] !== null) {
            $this->Desired = $param["Desired"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }
    }
}
