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
 * CreateAlertCenterRule请求参数结构体
 *
 * @method integer getHandleTime() 获取处置时间
1  1天
7   7天
-2 永久
 * @method void setHandleTime(integer $HandleTime) 设置处置时间
1  1天
7   7天
-2 永久
 * @method integer getHandleType() 获取处置类型
当HandleIdList 不为空时：1封禁 2放通  
当HandleIpList 不为空时：3放通 4封禁
 * @method void setHandleType(integer $HandleType) 设置处置类型
当HandleIdList 不为空时：1封禁 2放通  
当HandleIpList 不为空时：3放通 4封禁
 * @method integer getAlertDirection() 获取当前日志方向： 0 出向 1 入向
 * @method void setAlertDirection(integer $AlertDirection) 设置当前日志方向： 0 出向 1 入向
 * @method string getHandleDirection() 获取处置方向： 0出向 1入向 0,1出入向 3内网
 * @method void setHandleDirection(string $HandleDirection) 设置处置方向： 0出向 1入向 0,1出入向 3内网
 * @method array getHandleIdList() 获取处置对象,ID列表，  IdLists和IpList二选一
 * @method void setHandleIdList(array $HandleIdList) 设置处置对象,ID列表，  IdLists和IpList二选一
 * @method array getHandleIpList() 获取处置对象,IP列表，  IdLists和IpList二选一
 * @method void setHandleIpList(array $HandleIpList) 设置处置对象,IP列表，  IdLists和IpList二选一
 * @method string getHandleComment() 获取处置描述
 * @method void setHandleComment(string $HandleComment) 设置处置描述
 * @method integer getIgnoreReason() 获取放通原因:
0默认 1重复 2误报 3紧急放通
 * @method void setIgnoreReason(integer $IgnoreReason) 设置放通原因:
0默认 1重复 2误报 3紧急放通
 * @method string getBlockDomain() 获取封禁域名-保留字段
 * @method void setBlockDomain(string $BlockDomain) 设置封禁域名-保留字段
 */
class CreateAlertCenterRuleRequest extends AbstractModel
{
    /**
     * @var integer 处置时间
1  1天
7   7天
-2 永久
     */
    public $HandleTime;

    /**
     * @var integer 处置类型
当HandleIdList 不为空时：1封禁 2放通  
当HandleIpList 不为空时：3放通 4封禁
     */
    public $HandleType;

    /**
     * @var integer 当前日志方向： 0 出向 1 入向
     */
    public $AlertDirection;

    /**
     * @var string 处置方向： 0出向 1入向 0,1出入向 3内网
     */
    public $HandleDirection;

    /**
     * @var array 处置对象,ID列表，  IdLists和IpList二选一
     */
    public $HandleIdList;

    /**
     * @var array 处置对象,IP列表，  IdLists和IpList二选一
     */
    public $HandleIpList;

    /**
     * @var string 处置描述
     */
    public $HandleComment;

    /**
     * @var integer 放通原因:
0默认 1重复 2误报 3紧急放通
     */
    public $IgnoreReason;

    /**
     * @var string 封禁域名-保留字段
     */
    public $BlockDomain;

    /**
     * @param integer $HandleTime 处置时间
1  1天
7   7天
-2 永久
     * @param integer $HandleType 处置类型
当HandleIdList 不为空时：1封禁 2放通  
当HandleIpList 不为空时：3放通 4封禁
     * @param integer $AlertDirection 当前日志方向： 0 出向 1 入向
     * @param string $HandleDirection 处置方向： 0出向 1入向 0,1出入向 3内网
     * @param array $HandleIdList 处置对象,ID列表，  IdLists和IpList二选一
     * @param array $HandleIpList 处置对象,IP列表，  IdLists和IpList二选一
     * @param string $HandleComment 处置描述
     * @param integer $IgnoreReason 放通原因:
0默认 1重复 2误报 3紧急放通
     * @param string $BlockDomain 封禁域名-保留字段
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
        if (array_key_exists("HandleTime",$param) and $param["HandleTime"] !== null) {
            $this->HandleTime = $param["HandleTime"];
        }

        if (array_key_exists("HandleType",$param) and $param["HandleType"] !== null) {
            $this->HandleType = $param["HandleType"];
        }

        if (array_key_exists("AlertDirection",$param) and $param["AlertDirection"] !== null) {
            $this->AlertDirection = $param["AlertDirection"];
        }

        if (array_key_exists("HandleDirection",$param) and $param["HandleDirection"] !== null) {
            $this->HandleDirection = $param["HandleDirection"];
        }

        if (array_key_exists("HandleIdList",$param) and $param["HandleIdList"] !== null) {
            $this->HandleIdList = $param["HandleIdList"];
        }

        if (array_key_exists("HandleIpList",$param) and $param["HandleIpList"] !== null) {
            $this->HandleIpList = $param["HandleIpList"];
        }

        if (array_key_exists("HandleComment",$param) and $param["HandleComment"] !== null) {
            $this->HandleComment = $param["HandleComment"];
        }

        if (array_key_exists("IgnoreReason",$param) and $param["IgnoreReason"] !== null) {
            $this->IgnoreReason = $param["IgnoreReason"];
        }

        if (array_key_exists("BlockDomain",$param) and $param["BlockDomain"] !== null) {
            $this->BlockDomain = $param["BlockDomain"];
        }
    }
}
