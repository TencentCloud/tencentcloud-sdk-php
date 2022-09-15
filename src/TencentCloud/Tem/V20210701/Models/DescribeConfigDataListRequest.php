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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConfigDataList请求参数结构体
 *
 * @method string getEnvironmentId() 获取环境 ID
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境 ID
 * @method integer getSourceChannel() 获取来源渠道
 * @method void setSourceChannel(integer $SourceChannel) 设置来源渠道
 * @method string getContinueToken() 获取查询游标
 * @method void setContinueToken(string $ContinueToken) 设置查询游标
 * @method integer getLimit() 获取分页 limit
 * @method void setLimit(integer $Limit) 设置分页 limit
 */
class DescribeConfigDataListRequest extends AbstractModel
{
    /**
     * @var string 环境 ID
     */
    public $EnvironmentId;

    /**
     * @var integer 来源渠道
     */
    public $SourceChannel;

    /**
     * @var string 查询游标
     */
    public $ContinueToken;

    /**
     * @var integer 分页 limit
     */
    public $Limit;

    /**
     * @param string $EnvironmentId 环境 ID
     * @param integer $SourceChannel 来源渠道
     * @param string $ContinueToken 查询游标
     * @param integer $Limit 分页 limit
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("ContinueToken",$param) and $param["ContinueToken"] !== null) {
            $this->ContinueToken = $param["ContinueToken"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
