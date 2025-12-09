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
 * DescribeLiveStreamPushInfoList请求参数结构体
 *
 * @method string getPushDomain() 获取推流域名。
 * @method void setPushDomain(string $PushDomain) 设置推流域名。
 * @method string getAppName() 获取推流路径，与推流和播放地址中的AppName保持一致，默认为live。
 * @method void setAppName(string $AppName) 设置推流路径，与推流和播放地址中的AppName保持一致，默认为live。
 * @method integer getPageNum() 获取页数，
范围[1,10000]，
默认值：1。
 * @method void setPageNum(integer $PageNum) 设置页数，
范围[1,10000]，
默认值：1。
 * @method integer getPageSize() 获取每页个数，
范围：[1,100000]，
默认值： 200。
注意： 
1. 这里尽量PageSize填大于预估在线流数，一次性全部把在线流拉过去，减少分页查询次数。
2. 该接口用于拉取在线流，减少高频调用，推荐每分钟查询一次，结合推断流在线回调来维护在线流状态。
 * @method void setPageSize(integer $PageSize) 设置每页个数，
范围：[1,100000]，
默认值： 200。
注意： 
1. 这里尽量PageSize填大于预估在线流数，一次性全部把在线流拉过去，减少分页查询次数。
2. 该接口用于拉取在线流，减少高频调用，推荐每分钟查询一次，结合推断流在线回调来维护在线流状态。
 */
class DescribeLiveStreamPushInfoListRequest extends AbstractModel
{
    /**
     * @var string 推流域名。
     */
    public $PushDomain;

    /**
     * @var string 推流路径，与推流和播放地址中的AppName保持一致，默认为live。
     */
    public $AppName;

    /**
     * @var integer 页数，
范围[1,10000]，
默认值：1。
     */
    public $PageNum;

    /**
     * @var integer 每页个数，
范围：[1,100000]，
默认值： 200。
注意： 
1. 这里尽量PageSize填大于预估在线流数，一次性全部把在线流拉过去，减少分页查询次数。
2. 该接口用于拉取在线流，减少高频调用，推荐每分钟查询一次，结合推断流在线回调来维护在线流状态。
     */
    public $PageSize;

    /**
     * @param string $PushDomain 推流域名。
     * @param string $AppName 推流路径，与推流和播放地址中的AppName保持一致，默认为live。
     * @param integer $PageNum 页数，
范围[1,10000]，
默认值：1。
     * @param integer $PageSize 每页个数，
范围：[1,100000]，
默认值： 200。
注意： 
1. 这里尽量PageSize填大于预估在线流数，一次性全部把在线流拉过去，减少分页查询次数。
2. 该接口用于拉取在线流，减少高频调用，推荐每分钟查询一次，结合推断流在线回调来维护在线流状态。
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
        if (array_key_exists("PushDomain",$param) and $param["PushDomain"] !== null) {
            $this->PushDomain = $param["PushDomain"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
