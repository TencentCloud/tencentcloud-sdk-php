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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 全部指标数据
 *
 * @method float getIndexTraffic() 获取索引流量
 * @method void setIndexTraffic(float $IndexTraffic) 设置索引流量
 * @method float getStorage() 获取存储大小
 * @method void setStorage(float $Storage) 设置存储大小
 * @method integer getReadReqTimes() 获取读请求次数
 * @method void setReadReqTimes(integer $ReadReqTimes) 设置读请求次数
 * @method integer getWriteReqTimes() 获取写请求次数
 * @method void setWriteReqTimes(integer $WriteReqTimes) 设置写请求次数
 * @method integer getDocCount() 获取文档数量
 * @method void setDocCount(integer $DocCount) 设置文档数量
 */
class MetricAllData extends AbstractModel
{
    /**
     * @var float 索引流量
     */
    public $IndexTraffic;

    /**
     * @var float 存储大小
     */
    public $Storage;

    /**
     * @var integer 读请求次数
     */
    public $ReadReqTimes;

    /**
     * @var integer 写请求次数
     */
    public $WriteReqTimes;

    /**
     * @var integer 文档数量
     */
    public $DocCount;

    /**
     * @param float $IndexTraffic 索引流量
     * @param float $Storage 存储大小
     * @param integer $ReadReqTimes 读请求次数
     * @param integer $WriteReqTimes 写请求次数
     * @param integer $DocCount 文档数量
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
        if (array_key_exists("IndexTraffic",$param) and $param["IndexTraffic"] !== null) {
            $this->IndexTraffic = $param["IndexTraffic"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("ReadReqTimes",$param) and $param["ReadReqTimes"] !== null) {
            $this->ReadReqTimes = $param["ReadReqTimes"];
        }

        if (array_key_exists("WriteReqTimes",$param) and $param["WriteReqTimes"] !== null) {
            $this->WriteReqTimes = $param["WriteReqTimes"];
        }

        if (array_key_exists("DocCount",$param) and $param["DocCount"] !== null) {
            $this->DocCount = $param["DocCount"];
        }
    }
}
