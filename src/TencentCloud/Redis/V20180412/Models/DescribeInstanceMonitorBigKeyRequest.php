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
 * DescribeInstanceMonitorBigKey请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method integer getReqType() 获取请求类型：1——string类型，2——所有类型
 * @method void setReqType(integer $ReqType) 设置请求类型：1——string类型，2——所有类型
 * @method string getDate() 获取时间；例如：'20190219'
 * @method void setDate(string $Date) 设置时间；例如：'20190219'
 */
class DescribeInstanceMonitorBigKeyRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var integer 请求类型：1——string类型，2——所有类型
     */
    public $ReqType;

    /**
     * @var string 时间；例如：'20190219'
     */
    public $Date;

    /**
     * @param string $InstanceId 实例Id
     * @param integer $ReqType 请求类型：1——string类型，2——所有类型
     * @param string $Date 时间；例如：'20190219'
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
        if (array_key_exists('InstanceId',$param) and $param['InstanceId'] !== null) {
            $this->InstanceId = $param['InstanceId'];
        }

        if (array_key_exists('ReqType',$param) and $param['ReqType'] !== null) {
            $this->ReqType = $param['ReqType'];
        }

        if (array_key_exists('Date',$param) and $param['Date'] !== null) {
            $this->Date = $param['Date'];
        }
    }
}
