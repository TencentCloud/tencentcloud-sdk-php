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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAlertCenterIsolate请求参数结构体
 *
 * @method array getHandleAssetList() 获取处置对象,资产列表
 * @method void setHandleAssetList(array $HandleAssetList) 设置处置对象,资产列表
 * @method integer getHandleTime() 获取处置时间
1  1天
7   7天
-2 永久
 * @method void setHandleTime(integer $HandleTime) 设置处置时间
1  1天
7   7天
-2 永久
 * @method integer getAlertDirection() 获取当前日志方向： 0 出向 1 入向
 * @method void setAlertDirection(integer $AlertDirection) 设置当前日志方向： 0 出向 1 入向
 * @method array getIsolateType() 获取隔离类型 
1 互联网入站
2 互联网出站
4 内网访问
 * @method void setIsolateType(array $IsolateType) 设置隔离类型 
1 互联网入站
2 互联网出站
4 内网访问
 * @method integer getOmMode() 获取运维模式 1 IP白名单 2 身份认证
 * @method void setOmMode(integer $OmMode) 设置运维模式 1 IP白名单 2 身份认证
 */
class CreateAlertCenterIsolateRequest extends AbstractModel
{
    /**
     * @var array 处置对象,资产列表
     */
    public $HandleAssetList;

    /**
     * @var integer 处置时间
1  1天
7   7天
-2 永久
     */
    public $HandleTime;

    /**
     * @var integer 当前日志方向： 0 出向 1 入向
     */
    public $AlertDirection;

    /**
     * @var array 隔离类型 
1 互联网入站
2 互联网出站
4 内网访问
     */
    public $IsolateType;

    /**
     * @var integer 运维模式 1 IP白名单 2 身份认证
     */
    public $OmMode;

    /**
     * @param array $HandleAssetList 处置对象,资产列表
     * @param integer $HandleTime 处置时间
1  1天
7   7天
-2 永久
     * @param integer $AlertDirection 当前日志方向： 0 出向 1 入向
     * @param array $IsolateType 隔离类型 
1 互联网入站
2 互联网出站
4 内网访问
     * @param integer $OmMode 运维模式 1 IP白名单 2 身份认证
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
        if (array_key_exists("HandleAssetList",$param) and $param["HandleAssetList"] !== null) {
            $this->HandleAssetList = $param["HandleAssetList"];
        }

        if (array_key_exists("HandleTime",$param) and $param["HandleTime"] !== null) {
            $this->HandleTime = $param["HandleTime"];
        }

        if (array_key_exists("AlertDirection",$param) and $param["AlertDirection"] !== null) {
            $this->AlertDirection = $param["AlertDirection"];
        }

        if (array_key_exists("IsolateType",$param) and $param["IsolateType"] !== null) {
            $this->IsolateType = $param["IsolateType"];
        }

        if (array_key_exists("OmMode",$param) and $param["OmMode"] !== null) {
            $this->OmMode = $param["OmMode"];
        }
    }
}
