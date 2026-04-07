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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteStreamPackageLinearAssemblyProgramsByChannel请求参数结构体
 *
 * @method string getChannelID() 获取<p>频道的ID</p>
 * @method void setChannelID(string $ChannelID) 设置<p>频道的ID</p>
 * @method array getIDs() 获取<p>需要删除的Id数组</p>
 * @method void setIDs(array $IDs) 设置<p>需要删除的Id数组</p>
 */
class DeleteStreamPackageLinearAssemblyProgramsByChannelRequest extends AbstractModel
{
    /**
     * @var string <p>频道的ID</p>
     */
    public $ChannelID;

    /**
     * @var array <p>需要删除的Id数组</p>
     */
    public $IDs;

    /**
     * @param string $ChannelID <p>频道的ID</p>
     * @param array $IDs <p>需要删除的Id数组</p>
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
        if (array_key_exists("ChannelID",$param) and $param["ChannelID"] !== null) {
            $this->ChannelID = $param["ChannelID"];
        }

        if (array_key_exists("IDs",$param) and $param["IDs"] !== null) {
            $this->IDs = $param["IDs"];
        }
    }
}
