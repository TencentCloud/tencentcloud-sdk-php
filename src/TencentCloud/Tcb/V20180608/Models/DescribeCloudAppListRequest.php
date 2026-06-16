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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudAppList请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境ID</p>
 * @method string getDeployType() 获取<p>部署类型</p>
 * @method void setDeployType(string $DeployType) 设置<p>部署类型</p>
 * @method string getSearchKey() 获取<p>搜索关键字</p>
 * @method void setSearchKey(string $SearchKey) 设置<p>搜索关键字</p>
 * @method integer getPageSize() 获取<p>页大小</p>
 * @method void setPageSize(integer $PageSize) 设置<p>页大小</p>
 * @method integer getPageNo() 获取<p>页号</p>
 * @method void setPageNo(integer $PageNo) 设置<p>页号</p>
 */
class DescribeCloudAppListRequest extends AbstractModel
{
    /**
     * @var string <p>环境ID</p>
     */
    public $EnvId;

    /**
     * @var string <p>部署类型</p>
     */
    public $DeployType;

    /**
     * @var string <p>搜索关键字</p>
     */
    public $SearchKey;

    /**
     * @var integer <p>页大小</p>
     */
    public $PageSize;

    /**
     * @var integer <p>页号</p>
     */
    public $PageNo;

    /**
     * @param string $EnvId <p>环境ID</p>
     * @param string $DeployType <p>部署类型</p>
     * @param string $SearchKey <p>搜索关键字</p>
     * @param integer $PageSize <p>页大小</p>
     * @param integer $PageNo <p>页号</p>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("DeployType",$param) and $param["DeployType"] !== null) {
            $this->DeployType = $param["DeployType"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }
    }
}
