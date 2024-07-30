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
 * 额外参数
 *
 * @method string getDelShards() 获取要删除的shards
 * @method void setDelShards(string $DelShards) 设置要删除的shards
 * @method string getDelHosts() 获取要删除的节点uip
 * @method void setDelHosts(string $DelHosts) 设置要删除的节点uip
 */
class SpecExtra extends AbstractModel
{
    /**
     * @var string 要删除的shards
     * @deprecated
     */
    public $DelShards;

    /**
     * @var string 要删除的节点uip
     */
    public $DelHosts;

    /**
     * @param string $DelShards 要删除的shards
     * @param string $DelHosts 要删除的节点uip
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
        if (array_key_exists("DelShards",$param) and $param["DelShards"] !== null) {
            $this->DelShards = $param["DelShards"];
        }

        if (array_key_exists("DelHosts",$param) and $param["DelHosts"] !== null) {
            $this->DelHosts = $param["DelHosts"];
        }
    }
}
