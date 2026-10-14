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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IngestStatisticsDataInfo
 *
 * @method integer getIngest() 获取<p>输入用量</p>
 * @method void setIngest(integer $Ingest) 设置<p>输入用量</p>
 * @method string getTime() 获取<p>时间</p>
 * @method void setTime(string $Time) 设置<p>时间</p>
 * @method string getChannelId() 获取<p>频道Id</p>
 * @method void setChannelId(string $ChannelId) 设置<p>频道Id</p>
 * @method string getType() 获取<p>频道类型</p>
 * @method void setType(string $Type) 设置<p>频道类型</p>
 */
class IngestStatisticsDataInfo extends AbstractModel
{
    /**
     * @var integer <p>输入用量</p>
     */
    public $Ingest;

    /**
     * @var string <p>时间</p>
     */
    public $Time;

    /**
     * @var string <p>频道Id</p>
     */
    public $ChannelId;

    /**
     * @var string <p>频道类型</p>
     */
    public $Type;

    /**
     * @param integer $Ingest <p>输入用量</p>
     * @param string $Time <p>时间</p>
     * @param string $ChannelId <p>频道Id</p>
     * @param string $Type <p>频道类型</p>
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
        if (array_key_exists("Ingest",$param) and $param["Ingest"] !== null) {
            $this->Ingest = $param["Ingest"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
