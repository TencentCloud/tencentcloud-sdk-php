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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getFromUrl() 获取源Url。目前可支持直播流及点播文件。
 * @method void setFromUrl(string $FromUrl) 设置源Url。目前可支持直播流及点播文件。
 * @method string getToUrl() 获取目的Url，目前限制该目标地址为腾讯域名。
 * @method void setToUrl(string $ToUrl) 设置目的Url，目前限制该目标地址为腾讯域名。
 * @method integer getAreaId() 获取区域id：
1-深圳，
2-上海，
3-天津，
4-中国香港。
 * @method void setAreaId(integer $AreaId) 设置区域id：
1-深圳，
2-上海，
3-天津，
4-中国香港。
 * @method integer getIspId() 获取运营商id：
1-电信，
2-移动，
3-联通，
4-其他。
注：AreaId为4的时候,IspId只能为其他。
 * @method void setIspId(integer $IspId) 设置运营商id：
1-电信，
2-移动，
3-联通，
4-其他。
注：AreaId为4的时候,IspId只能为其他。
 * @method string getStartTime() 获取开始时间。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
 * @method void setStartTime(string $StartTime) 设置开始时间。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
 * @method string getEndTime() 获取结束时间，注意：
1. 结束时间必须大于开始时间；
2. 结束时间和开始时间必须大于当前时间；
3. 结束时间 和 开始时间 间隔必须小于七天。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
 * @method void setEndTime(string $EndTime) 设置结束时间，注意：
1. 结束时间必须大于开始时间；
2. 结束时间和开始时间必须大于当前时间；
3. 结束时间 和 开始时间 间隔必须小于七天。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
 */

/**
 *CreatePullStreamConfig请求参数结构体
 */
class CreatePullStreamConfigRequest extends AbstractModel
{
    /**
     * @var string 源Url。目前可支持直播流及点播文件。
     */
    public $FromUrl;

    /**
     * @var string 目的Url，目前限制该目标地址为腾讯域名。
     */
    public $ToUrl;

    /**
     * @var integer 区域id：
1-深圳，
2-上海，
3-天津，
4-中国香港。
     */
    public $AreaId;

    /**
     * @var integer 运营商id：
1-电信，
2-移动，
3-联通，
4-其他。
注：AreaId为4的时候,IspId只能为其他。
     */
    public $IspId;

    /**
     * @var string 开始时间。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
     */
    public $StartTime;

    /**
     * @var string 结束时间，注意：
1. 结束时间必须大于开始时间；
2. 结束时间和开始时间必须大于当前时间；
3. 结束时间 和 开始时间 间隔必须小于七天。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
     */
    public $EndTime;
    /**
     * @param string $FromUrl 源Url。目前可支持直播流及点播文件。
     * @param string $ToUrl 目的Url，目前限制该目标地址为腾讯域名。
     * @param integer $AreaId 区域id：
1-深圳，
2-上海，
3-天津，
4-中国香港。
     * @param integer $IspId 运营商id：
1-电信，
2-移动，
3-联通，
4-其他。
注：AreaId为4的时候,IspId只能为其他。
     * @param string $StartTime 开始时间。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
     * @param string $EndTime 结束时间，注意：
1. 结束时间必须大于开始时间；
2. 结束时间和开始时间必须大于当前时间；
3. 结束时间 和 开始时间 间隔必须小于七天。
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("FromUrl",$param) and $param["FromUrl"] !== null) {
            $this->FromUrl = $param["FromUrl"];
        }

        if (array_key_exists("ToUrl",$param) and $param["ToUrl"] !== null) {
            $this->ToUrl = $param["ToUrl"];
        }

        if (array_key_exists("AreaId",$param) and $param["AreaId"] !== null) {
            $this->AreaId = $param["AreaId"];
        }

        if (array_key_exists("IspId",$param) and $param["IspId"] !== null) {
            $this->IspId = $param["IspId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
