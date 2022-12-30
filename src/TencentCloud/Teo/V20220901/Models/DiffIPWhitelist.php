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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 最新IP白名单列表相比于当前IP白名单列表的区别
 *
 * @method IPWhitelist getLatestIPWhitelist() 获取最新IP白名单列表。
 * @method void setLatestIPWhitelist(IPWhitelist $LatestIPWhitelist) 设置最新IP白名单列表。
 * @method IPWhitelist getAddedIPWhitelist() 获取最新IP白名单列表相比于当前IP白名单列表，新增部分。
 * @method void setAddedIPWhitelist(IPWhitelist $AddedIPWhitelist) 设置最新IP白名单列表相比于当前IP白名单列表，新增部分。
 * @method IPWhitelist getRemovedIPWhitelist() 获取最新IP白名单列表相比于当前IP白名单列表，删减部分。
 * @method void setRemovedIPWhitelist(IPWhitelist $RemovedIPWhitelist) 设置最新IP白名单列表相比于当前IP白名单列表，删减部分。
 * @method IPWhitelist getNoChangeIPWhitelist() 获取最新IP白名单列表相比于当前IP白名单列表，不变部分。
 * @method void setNoChangeIPWhitelist(IPWhitelist $NoChangeIPWhitelist) 设置最新IP白名单列表相比于当前IP白名单列表，不变部分。
 */
class DiffIPWhitelist extends AbstractModel
{
    /**
     * @var IPWhitelist 最新IP白名单列表。
     */
    public $LatestIPWhitelist;

    /**
     * @var IPWhitelist 最新IP白名单列表相比于当前IP白名单列表，新增部分。
     */
    public $AddedIPWhitelist;

    /**
     * @var IPWhitelist 最新IP白名单列表相比于当前IP白名单列表，删减部分。
     */
    public $RemovedIPWhitelist;

    /**
     * @var IPWhitelist 最新IP白名单列表相比于当前IP白名单列表，不变部分。
     */
    public $NoChangeIPWhitelist;

    /**
     * @param IPWhitelist $LatestIPWhitelist 最新IP白名单列表。
     * @param IPWhitelist $AddedIPWhitelist 最新IP白名单列表相比于当前IP白名单列表，新增部分。
     * @param IPWhitelist $RemovedIPWhitelist 最新IP白名单列表相比于当前IP白名单列表，删减部分。
     * @param IPWhitelist $NoChangeIPWhitelist 最新IP白名单列表相比于当前IP白名单列表，不变部分。
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
        if (array_key_exists("LatestIPWhitelist",$param) and $param["LatestIPWhitelist"] !== null) {
            $this->LatestIPWhitelist = new IPWhitelist();
            $this->LatestIPWhitelist->deserialize($param["LatestIPWhitelist"]);
        }

        if (array_key_exists("AddedIPWhitelist",$param) and $param["AddedIPWhitelist"] !== null) {
            $this->AddedIPWhitelist = new IPWhitelist();
            $this->AddedIPWhitelist->deserialize($param["AddedIPWhitelist"]);
        }

        if (array_key_exists("RemovedIPWhitelist",$param) and $param["RemovedIPWhitelist"] !== null) {
            $this->RemovedIPWhitelist = new IPWhitelist();
            $this->RemovedIPWhitelist->deserialize($param["RemovedIPWhitelist"]);
        }

        if (array_key_exists("NoChangeIPWhitelist",$param) and $param["NoChangeIPWhitelist"] !== null) {
            $this->NoChangeIPWhitelist = new IPWhitelist();
            $this->NoChangeIPWhitelist->deserialize($param["NoChangeIPWhitelist"]);
        }
    }
}
