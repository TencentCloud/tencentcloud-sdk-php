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
namespace TencentCloud\Market\V20191010\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业微信用户信息

 *
 * @method string getPaidCorpId() 获取客户企业的corpid
 * @method void setPaidCorpId(string $PaidCorpId) 设置客户企业的corpid
 * @method string getPaidCorpName() 获取客户企业的Corp全称
 * @method void setPaidCorpName(string $PaidCorpName) 设置客户企业的Corp全称
 */
class WeChatUserInfo extends AbstractModel
{
    /**
     * @var string 客户企业的corpid
     */
    public $PaidCorpId;

    /**
     * @var string 客户企业的Corp全称
     */
    public $PaidCorpName;

    /**
     * @param string $PaidCorpId 客户企业的corpid
     * @param string $PaidCorpName 客户企业的Corp全称
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
        if (array_key_exists("PaidCorpId",$param) and $param["PaidCorpId"] !== null) {
            $this->PaidCorpId = $param["PaidCorpId"];
        }

        if (array_key_exists("PaidCorpName",$param) and $param["PaidCorpName"] !== null) {
            $this->PaidCorpName = $param["PaidCorpName"];
        }
    }
}
