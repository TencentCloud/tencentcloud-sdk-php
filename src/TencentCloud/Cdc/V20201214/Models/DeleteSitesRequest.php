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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteSites请求参数结构体
 *
 * @method array getSiteIds() 获取要删除的站点id列表
 * @method void setSiteIds(array $SiteIds) 设置要删除的站点id列表
 */
class DeleteSitesRequest extends AbstractModel
{
    /**
     * @var array 要删除的站点id列表
     */
    public $SiteIds;

    /**
     * @param array $SiteIds 要删除的站点id列表
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
        if (array_key_exists("SiteIds",$param) and $param["SiteIds"] !== null) {
            $this->SiteIds = $param["SiteIds"];
        }
    }
}
