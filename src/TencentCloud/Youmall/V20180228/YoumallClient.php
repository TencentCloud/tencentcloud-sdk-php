<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Youmall\V20180228;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Youmall\V20180228\Models as Models;

/**
* @method Models\DescribePersonInfoResponse DescribePersonInfo(Models\DescribePersonInfoRequest $req) 指定门店获取所有顾客详情列表，包含客户ID、图片、年龄、性别
* @method Models\DescribePersonVisitInfoResponse DescribePersonVisitInfo(Models\DescribePersonVisitInfoRequest $req) 获取门店指定时间范围内的所有用户到访信息记录，支持的时间范围：过去365天，含当天。
* @method Models\DescribeShopHourTrafficInfoResponse DescribeShopHourTrafficInfo(Models\DescribeShopHourTrafficInfoRequest $req) 按小时提供查询日期范围内门店的每天每小时累计客流人数数据，支持的时间范围：过去365天，含当天。
* @method Models\DescribeShopInfoResponse DescribeShopInfo(Models\DescribeShopInfoRequest $req) 根据客户身份标识获取客户下所有的门店信息列表
* @method Models\DescribeShopTrafficInfoResponse DescribeShopTrafficInfo(Models\DescribeShopTrafficInfoRequest $req) 按天提供查询日期范围内门店的单日累计客流人数，支持的时间范围：过去365天，含当天。
* @method Models\DescribeZoneTrafficInfoResponse DescribeZoneTrafficInfo(Models\DescribeZoneTrafficInfoRequest $req) 按天提供查询日期范围内，客户指定门店下的所有区域（优Mall部署时已配置区域）的累计客流人次和平均停留时间。支持的时间范围：过去365天，含当天。
* @method Models\RegisterCallbackResponse RegisterCallback(Models\RegisterCallbackRequest $req) 调用本接口在优Mall中注册自己集团的到店通知回调接口地址，接口协议为HTTP或HTTPS。注册后，若集团有特殊身份（例如老客）到店通知，优Mall后台将主动将到店信息push给该接口
 */

class YoumallClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "youmall.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-02-28";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("youmall")."\\"."V20180228\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
