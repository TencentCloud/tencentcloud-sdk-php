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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportProjectParamDs请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getOriginDomain() 获取域名
 * @method void setOriginDomain(string $OriginDomain) 设置域名
 * @method string getRange() 获取发布范围 ALL, PUBLISH, PARTIAL 全量 增量 自选
 * @method void setRange(string $Range) 设置发布范围 ALL, PUBLISH, PARTIAL 全量 增量 自选
 * @method string getPublishTime() 获取增量发布时间 OffsetDateTime格式 2021-11-05T23:59:59Z
 * @method void setPublishTime(string $PublishTime) 设置增量发布时间 OffsetDateTime格式 2021-11-05T23:59:59Z
 * @method array getParams() 获取自选导出参数
 * @method void setParams(array $Params) 设置自选导出参数
 */
class ExportProjectParamDsRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 域名
     */
    public $OriginDomain;

    /**
     * @var string 发布范围 ALL, PUBLISH, PARTIAL 全量 增量 自选
     */
    public $Range;

    /**
     * @var string 增量发布时间 OffsetDateTime格式 2021-11-05T23:59:59Z
     */
    public $PublishTime;

    /**
     * @var array 自选导出参数
     */
    public $Params;

    /**
     * @param string $ProjectId 项目id
     * @param string $OriginDomain 域名
     * @param string $Range 发布范围 ALL, PUBLISH, PARTIAL 全量 增量 自选
     * @param string $PublishTime 增量发布时间 OffsetDateTime格式 2021-11-05T23:59:59Z
     * @param array $Params 自选导出参数
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("OriginDomain",$param) and $param["OriginDomain"] !== null) {
            $this->OriginDomain = $param["OriginDomain"];
        }

        if (array_key_exists("Range",$param) and $param["Range"] !== null) {
            $this->Range = $param["Range"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }
    }
}
