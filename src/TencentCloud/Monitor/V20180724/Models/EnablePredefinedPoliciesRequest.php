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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnablePredefinedPolicies请求参数结构体
 *
 * @method string getPredefinedConfigID() 获取预设配置id
 * @method void setPredefinedConfigID(string $PredefinedConfigID) 设置预设配置id
 * @method string getPredefinedGroupID() 获取云产品id
 * @method void setPredefinedGroupID(string $PredefinedGroupID) 设置云产品id
 * @method array getNoticeIDs() 获取通知模板id
 * @method void setNoticeIDs(array $NoticeIDs) 设置通知模板id
 */
class EnablePredefinedPoliciesRequest extends AbstractModel
{
    /**
     * @var string 预设配置id
     */
    public $PredefinedConfigID;

    /**
     * @var string 云产品id
     */
    public $PredefinedGroupID;

    /**
     * @var array 通知模板id
     */
    public $NoticeIDs;

    /**
     * @param string $PredefinedConfigID 预设配置id
     * @param string $PredefinedGroupID 云产品id
     * @param array $NoticeIDs 通知模板id
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
        if (array_key_exists("PredefinedConfigID",$param) and $param["PredefinedConfigID"] !== null) {
            $this->PredefinedConfigID = $param["PredefinedConfigID"];
        }

        if (array_key_exists("PredefinedGroupID",$param) and $param["PredefinedGroupID"] !== null) {
            $this->PredefinedGroupID = $param["PredefinedGroupID"];
        }

        if (array_key_exists("NoticeIDs",$param) and $param["NoticeIDs"] !== null) {
            $this->NoticeIDs = $param["NoticeIDs"];
        }
    }
}
