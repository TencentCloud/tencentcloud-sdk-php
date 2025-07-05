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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Zookeeper的地域信息的 myid 信息记录
 *
 * @method string getRegion() 获取地域信息
 * @method void setRegion(string $Region) 设置地域信息
 * @method integer getMyIdStart() 获取myid 的起始号段
 * @method void setMyIdStart(integer $MyIdStart) 设置myid 的起始号段
 * @method integer getMyIdEnd() 获取myid 的结束号段
 * @method void setMyIdEnd(integer $MyIdEnd) 设置myid 的结束号段
 */
class ZookeeperRegionMyIdInfo extends AbstractModel
{
    /**
     * @var string 地域信息
     */
    public $Region;

    /**
     * @var integer myid 的起始号段
     */
    public $MyIdStart;

    /**
     * @var integer myid 的结束号段
     */
    public $MyIdEnd;

    /**
     * @param string $Region 地域信息
     * @param integer $MyIdStart myid 的起始号段
     * @param integer $MyIdEnd myid 的结束号段
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("MyIdStart",$param) and $param["MyIdStart"] !== null) {
            $this->MyIdStart = $param["MyIdStart"];
        }

        if (array_key_exists("MyIdEnd",$param) and $param["MyIdEnd"] !== null) {
            $this->MyIdEnd = $param["MyIdEnd"];
        }
    }
}
