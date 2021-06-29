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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryExternalUserMappingInfo请求参数结构体
 *
 * @method array getCorpExternalUserIdList() 获取企业主体对应的外部联系人id列表，列表长度限制最大为50。
 * @method void setCorpExternalUserIdList(array $CorpExternalUserIdList) 设置企业主体对应的外部联系人id列表，列表长度限制最大为50。
 */
class QueryExternalUserMappingInfoRequest extends AbstractModel
{
    /**
     * @var array 企业主体对应的外部联系人id列表，列表长度限制最大为50。
     */
    public $CorpExternalUserIdList;

    /**
     * @param array $CorpExternalUserIdList 企业主体对应的外部联系人id列表，列表长度限制最大为50。
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
        if (array_key_exists("CorpExternalUserIdList",$param) and $param["CorpExternalUserIdList"] !== null) {
            $this->CorpExternalUserIdList = $param["CorpExternalUserIdList"];
        }
    }
}
