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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAIWorkbenchResourceInstances请求参数结构体
 *
 * @method string getResourceMapId() 获取<p>资源地图 ID</p>
 * @method void setResourceMapId(string $ResourceMapId) 设置<p>资源地图 ID</p>
 * @method PageByNumParams getPageParams() 获取<p>分页参数</p>
 * @method void setPageParams(PageByNumParams $PageParams) 设置<p>分页参数</p>
 */
class ListAIWorkbenchResourceInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>资源地图 ID</p>
     */
    public $ResourceMapId;

    /**
     * @var PageByNumParams <p>分页参数</p>
     */
    public $PageParams;

    /**
     * @param string $ResourceMapId <p>资源地图 ID</p>
     * @param PageByNumParams $PageParams <p>分页参数</p>
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
        if (array_key_exists("ResourceMapId",$param) and $param["ResourceMapId"] !== null) {
            $this->ResourceMapId = $param["ResourceMapId"];
        }

        if (array_key_exists("PageParams",$param) and $param["PageParams"] !== null) {
            $this->PageParams = new PageByNumParams();
            $this->PageParams->deserialize($param["PageParams"]);
        }
    }
}
